<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<table id="keranjang" class="table table-bordered table-striped table-hover">
		<tr class="text-center">
			<th>No</th>
			<th>Jenis Limbah</th>
			<th>Jumlah Kayu</th>
			<th>Jumlah Pemesanan</th>
		</tr>
		<form method="post" action="<?php echo base_url() ?>toko/list_limbah/proses_pesanan">
			<input type="hidden" class="form-control" id="kode_transaksi" name="kode_transaksi" value="KY<?php echo sprintf("%04s", $kode_transaksi) ?>" readonly>
			<?php
			$no = 1;
			foreach ($this->cart->contents() as $items) : ?>
				<tr class="text-center">
					<td><?php echo $no++ ?></td>
					<td><?php echo $items['name'] ?></td>
					<td><?php echo $items['price'] ?> </td>
					<td><?php echo $items['qty'] ?></td>
				</tr>
			<?php endforeach; ?>
	</table>
	<center>
		<a href="<?php echo base_url('toko/list_limbah/hapus_keranjang') ?>">
			<div class="btn btn-sm btn-danger">Batal Donasi</div>
		</a>

		<button type="submit" class="btn btn-sm btn-success">Pesan</button>
	</center>
	</form>
</div>