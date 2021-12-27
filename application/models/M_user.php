<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
  public function get_all_data()
  {
    $this->db->select('*');
    $this->db->from('user');
    return $this->db->get()->result();
  }
  public function get_data()
  {
    $this->db->select('*');
    $this->db->from('user', 'role_id', '3');
    return $this->db->get()->result();
  }
}
