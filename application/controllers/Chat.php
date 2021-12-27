<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $data['title'] = 'Chat All Users';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $email = $this->session->userdata('email');
    $id = $this->session->userdata('id');
    if (!$email) {
      redirect('auth');
    }

    $this->db->where('email !=', $email);
    $data['users'] = $this->db->get('user')->result();
    $data['isread'] = $this->db->query("SELECT isread,chats.to FROM chats WHERE chats.isread=0 AND chats.to=$id GROUP BY isread")->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('chat/index', $data);
    $this->load->view('templates/footer');
  }

  public function chatuser($to)
  {
    $data['title'] = 'Chat All Users';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $email = $this->session->userdata('email');
    $id = $this->session->userdata('id');
    if (!$email) {
      redirect('auth');
    }

    if ($this->input->server('REQUEST_METHOD') === 'POST') {
      $message = $this->input->post('message');

      $data  = [
        'from' => $id,
        'to' => $to,
        'message' => $message,
        'isread' => 0
      ];

      $this->db->insert('chats', $data);
      redirect('chat/chatuser/' . $to);
    } else {
      $this->db->where_in('from', [$id, $to]);
      $this->db->where_in('to', [$id, $to]);
      $this->db->order_by('created_at', 'ASC');
      $data['to'] = $to;
      $data['chats'] = $this->db->get('chats')->result();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('chat/chatuser', $data);
      $this->load->view('templates/footer');
    }
  }

  public function ajax($to)
  {
    $data['title'] = 'Chat All Users';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $email = $this->session->userdata('email');
    $id = $this->session->userdata('id');
    if (!$email) {
      redirect('auth');
    }
    $id = $this->session->userdata('id');

    $this->db->where_in('from', [$id, $to]);
    $this->db->where_in('to', [$id, $to]);
    $this->db->order_by('created_at', 'ASC');
    $data['to'] = $to;
    $data['chats'] = $this->db->get('chats')->result();

    $result = '<div class="border rounded">';

    foreach ($data['chats'] as $item) {
      if ($item->from == $id) {
        $result .= '<div class="text-right"><span class="mr-2 text-primary" style="font-size:22px;">' . $item->message . '</span><br><span style="font-size:11px;" class="text-secondary mr-2">' . date('d-m-Y H:i:s', strtotime($item->created_at)) . '</span></div>';
      } else {
        $result .= '<div class="text-left"><span class="ml-2" style="font-size:22px;">' . $item->message . '</span><br><span style="font-size:11px;" class="text-secondary ml-2">' . date('d-m-Y H:i:s', strtotime($item->created_at)) . '</span></div>';
      }
    }
    $result .= '</div>';
    echo $result;
  }

  public function view($page, $data = [])
  {
    $data['title'] = 'Chat All Users';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view($page, $data);
    $this->load->view('templates/footer');
  }
}
