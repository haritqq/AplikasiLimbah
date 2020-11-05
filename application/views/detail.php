<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA MAHASISWA</strong></h4>

        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <th>:</th>
                <td><?php echo $detail->nama ?></td>
            </tr>
            <tr>
                <th>Nim</th>
                <th>:</th>
                <td><?php echo $detail->nim ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <td><?php echo $detail->tgl_lahir ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td><?php echo $detail->alamat ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <th>:</th>
                <td><?php echo $detail->email ?></td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <th>:</th>
                <td><?php echo $detail->no_telp ?></td>
            </tr>

            <tr>
                <td>
                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" 
                    width="90" height="110">
                </td>
            </tr>
        </table>
    
        <a href="<?php echo base_url('mahasiswa/index/'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>