<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <?php foreach ($users as $item) { ?>
      <div class="card ml-2 mt-2" style="width: 20rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $item->email ?></h5>
          <p class="card-text">Chat Saya</p>
          <a href="<?= base_url('chat/chatuser/' . $item->id) ?>" class="btn btn-primary mt-2">Start Chat</a>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
</div>