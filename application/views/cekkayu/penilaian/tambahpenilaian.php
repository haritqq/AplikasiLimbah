<style>
    .item2 {
        color: black;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Tambah Penilaian</h1> -->
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg-8">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Silahkan Pilih Opsi Sesuai Dengan Limbah Kayu Yang Ingin di Donasikan</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample3">
                    <div class="card-body">
                        <?= form_open_multipart('cekkayu/tambahpenilaian'); ?>
                        <div class="form-group row">
                            <label for="id_limbah" class="col-sm-6 col-form-label">Pilih Limbah Kayu</label>
                            <div class="col-sm-6">
                                <select name="id_limbah" id="id_limbah" class="form-control col-sm-9" required>
                                    <option value="">--Pilih Limbah Kayu--</option>
                                    <?php foreach ($limbah as $ka) : ?>
                                        <option value="<?= $ka['id_limbah'] ?>"><?= $ka['nama_limbah'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <?php

                        $query = "SELECT nama_subkriteria , id_subkriteria from subkriteria";
                        $querk = "SELECT nama_kriteria , id_kriteria from kriteria";

                        $que = $this->db->query($query)->result_array();
                        $queryk = $this->db->query($querk)->result_array();
                        ?>
                        <?php foreach ($queryk as $qk) : ?>


                            <?php
                            $id_kriteria = $qk['id_kriteria'];
                            $querySubkriteria =  "SELECT *
                                FROM subkriteria JOIN kriteria
                                ON subkriteria.id_kriteria = kriteria.id_kriteria
                                WHERE subkriteria.id_kriteria = $id_kriteria";

                            $subkriteria = $this->db->query($querySubkriteria)->result_array();
                            ?>

                            <?php foreach ($subkriteria as $q) : ?>
                                <div class="form-group row">
                                    <label for="subkriteria<?= $q['id_subkriteria'] ?>" name="subkriteria<?= $q['id_subkriteria'] ?>" class="col-sm-6 col-form-label"><?= $q['nama_subkriteria']; ?></label>
                                    <div class="col-sm-6">
                                        <select onchange="this.style.backgroundColor=this.options[this.selectedIndex].style.backgroundColor" name="nilai<?= $q['id_subkriteria'] ?>" id="nilai<?= $q['id_subkriteria'] ?>" <?php if ($q['nama_subkriteria'] == 'Berjamur') { ?> class="form-control col-sm-9 " required>
                                            <option value="">--Pilih Nilai--</option>
                                            <option value="3"> Tidak Ada Jamur di Limbah Kayu </option>
                                            <option value="2"> Sedikit ada jamur di limbah kayu </option>
                                            <option value="1"> Banyak Jamur di Limbah Kayu </option>
                                        </select>
                                    <?php } elseif ($q['nama_subkriteria'] == 'Berlubang') { ?>
                                        class="form-control col-sm-9" required>
                                        <option value="">--Pilih Nilai--</option>
                                        <option value="3">Limbah Kayu Tidak Berlubang</option>
                                        <option value="2">Limbah Kayu Sedikit Berlubang</option>
                                        <option value="1">Limbah Kayu Berlubang Sangat Banyak</option>
                                        </select>
                                    <?php } elseif ($q['nama_subkriteria'] == 'Pelapukan') { ?>
                                        class="form-control col-sm-9" required>
                                        <option value="">--Pilih Nilai--</option>
                                        <option value="3">Tidak Lapuk</option>
                                        <option value="2">Sedikit Lapuk</option>
                                        <option value="1">Sangat Lapuk</option>
                                        </select>
                                    <?php } elseif ($q['nama_subkriteria'] == 'Keretakan') { ?>
                                        class="form-control col-sm-9" required>
                                        <option value="">--Pilih Nilai--</option>
                                        <option value="3">Tidak Retak</option>
                                        <option value="2">Sedikit Retak</option>
                                        <option value="1">Retaknya Banyak</option>
                                        </select>
                                    <?php } elseif ($q['nama_subkriteria'] == 'Warna') { ?>
                                        class="form-control col-sm-9" required>
                                        <option style="background-color:white" value="">--Pilih Nilai--</option>
                                        <option class="item2" style="background-color:rgba(139, 69, 19)" value="3">Berwarna Tua</option>
                                        <option class="item2" style="background-color:rgba(205, 133, 63)" value="2">Berwarna Sedang</option>
                                        <option class="item2" style="background-color:rgba(255, 235, 205)" value="1">Berwarna Muda</option>
                                        </select>
                                    <?php } elseif ($q['nama_subkriteria'] == 'Tekstur') { ?>
                                        class="form-control col-sm-9" required>
                                        <option value="">--Pilih Nilai--</option>
                                        <option value="3">Halus</option>
                                        <option value="2">Sedikit kasar dan sedikit halus</option>
                                        <option value="1">Kasar</option>
                                        </select>
                                    <?php } elseif ($q['nama_subkriteria'] == 'Ukuran Limbah Kayu') { ?>
                                        class="form-control col-sm-9" required>
                                        <option value="">--Pilih Nilai--</option>
                                        <option value="3">Besar</option>
                                        <option value="2">Sedang</option>
                                        <option value="1">Kecil</option>
                                        </select>
                                    <?php } elseif ($q['nama_subkriteria'] == 'Fisik Kayu') { ?>
                                        class="form-control col-sm-9" required>
                                        <option value="">--Pilih Nilai--</option>
                                        <option value="3">Keras</option>
                                        <option value="2">Tidak terlalu keras dan tidak terlalu lunak</option>
                                        <option value="1">Lunak</option>
                                        </select>
                                    <?php } elseif ($q['nama_subkriteria'] == 'Berat Kayu') { ?>
                                        class="form-control col-sm-9" required>
                                        <option value="">--Pilih Nilai--</option>
                                        <option value="3">Berat</option>
                                        <option value="2">Tidak terlalu berat dan tidak terlalu ringan</option>
                                        <option value="1">Ringan</option>
                                        </select>
                                    <?php } ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>



                        <?php endforeach; ?>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-info">Kirim</button>
                                <a href="<?= base_url('cekkayu/limbah'); ?>" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->