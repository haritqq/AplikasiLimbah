<div class="container-fluid">
	<div class="card">
		<h5 class="card-header">Detail Limbah Kayu</h5>
		<div class="card-body">

			<?php foreach ($kayu as $brg) : ?>
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url() . '/assets/img/upload/' . $brg->foto_kayu ?>" class="card-img-top">
					</div>
					<div class="col-md-8">
						<table class="table">
							<tr>
								<td>Nama Donatur</td>
								<td><strong>
										<?php echo $brg->name ?>
									</strong></td>
							</tr>
							<tr>
								<td>Jenis Limbah Kayu</td>
								<td><strong><?php echo $brg->nama_limbah ?></strong></td>
							</tr>
							<tr>
								<td>Keterangan</td>
								<td><strong><?php echo $brg->keterangan ?></strong></td>
							</tr>
							<tr>
								<td>Ukuran Kayu</td>
								<td><strong><?php echo $brg->ukuran_kayu ?></strong></td>
							</tr>
							<tr>
								<td>Jumlah Kayu</td>
								<td><strong><?php echo $brg->jumlah_kayu ?></strong></td>
							</tr>
							</tr>
							<tr>
								<td>Bentuk Kayu</td>
								<td><strong><?php echo $brg->bentuk_kayu ?></strong></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><strong><?php echo $brg->alamat ?></strong></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><strong><?php echo $brg->email ?></strong></td>
							</tr>
							<tr>
								<td>No Telepon</td>
								<td><strong><?php echo $brg->nomor_telepon ?></strong></td>
							</tr>

						</table>
						<div class="mb-3">
							<a class="btn btn-sm btn-success" href="<?= base_url('toko/list_limbah/download_pembayaran/' . $brg->id_ky); ?>"><i class="fas fa-download"></i>Download Bukti Cek Kayu</a>
						</div>

						<?php
						if ($brg->status ==  "1") {
							echo anchor(
								'toko/list_limbah/tambah_donasi/' . $brg->id_ky,
								'<div class="btn btn-sm btn-primary">ambil donasi</div>'
							);
						} else {
							echo '<div class="btn btn-sm btn-danger">Tidak Tersedia</div>';
						}
						?>
						<?php echo anchor('toko/list_limbah', '<div class="btn btn-sm btn-warning">Kembali</div>') ?>

					</div>

				</div>
			<?php endforeach; ?>
		</div>
	</div>