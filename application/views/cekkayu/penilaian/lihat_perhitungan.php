<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
  <section id="car-list-area" class="section-padding">
    <div class="container">
      <?= $this->session->flashdata('pesan') ?>
      <div class="row">
        <!-- Car List Content Start -->
        <div class="col-lg-12">
          <div class="car-list-content">
            <div class="col-lg-12">


              <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Nilai</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample1">
                  <div class="card-body">
                    <?= form_error('penilaian', '<div class="alert
        alert-danger" role="alert">', '</div>'); ?>

                    <?= $this->session->flashdata('message'); ?>
                    <div class="table-responsive">
                      <table class="table table-sm table-hover table-bordered" id="display1">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Limbah Kayu</th>
                            <th scope="col">Kriteria</th>
                            <th scope="col">Sub Kriteria</th>
                            <th scope="col">Hasil Pilihan</th>
                            <th scope="col">Nilai</th>
                            <th class="text-center" scope="col">Selisih<br>
                              <p style="font-size:10px">(Nilai-Nilai Subkriteria)</p>
                            </th>
                            <th scope="col">Nilai Gap</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($penilaian as $p) : ?>
                            <tr>
                              <th class="text-center" scope="row"><?= $i ?></th>
                              <td><?= $p['nama_limbah']; ?></td>
                              <td><?= $p['nama_kriteria']; ?></td>
                              <td><?= $p['nama_subkriteria']; ?></td>
                              <td><?php
                                  if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Berjamur") {
                                    echo "<span class='badge badge-success'> Tidak Ada Jamur di Limbah Kayu</span>";
                                  } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Berjamur") {
                                    echo "<span class='badge badge-warning'> Sedikit ada jamur di limbah kayu </span>";
                                  } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Berjamur") {
                                    echo "<span class='badge badge-danger'> Banyak Jamur di Limbah Kayu </span>";
                                  }
                                  if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Berlubang") {
                                    echo "<span class='badge badge-success'> Limbah Kayu Tidak Berlubang</span>";
                                  } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Berlubang") {
                                    echo "<span class='badge badge-warning'> Limbah Kayu Sedikit Berlubang </span>";
                                  } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Berlubang") {
                                    echo "<span class='badge badge-danger'> Limbah Kayu Berlubang Sangat Banyak </span>";
                                  }
                                  if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Pelapukan") {
                                    echo "<span class='badge badge-success'> Limbah Kayu Tidak Lapuk</span>";
                                  } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Pelapukan") {
                                    echo "<span class='badge badge-warning'> Sedikit Lapuk </span>";
                                  } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Pelapukan") {
                                    echo "<span class='badge badge-danger'> Sangat Lapuk </span>";
                                  }
                                  if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Keretakan") {
                                    echo "<span class='badge badge-success'> Limbah Kayu Tidak Retak</span>";
                                  } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Keretakan") {
                                    echo "<span class='badge badge-warning'> Sedikit Retak</span>";
                                  } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Keretakan") {
                                    echo "<span class='badge badge-danger'>Retaknya Banyak</span>";
                                  }
                                  if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Warna") {
                                    echo "<span class='badge badge-success'>Berwarna Tua</span>";
                                  } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Warna") {
                                    echo "<span class='badge badge-warning'>Berwarna Tidak Tua dan Tidak Muda</span>";
                                  } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Warna") {
                                    echo "<span class='badge badge-danger'> Berwarna Muda</span>";
                                  }
                                  if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Tekstur") {
                                    echo "<span class='badge badge-success'> Halus</span>";
                                  } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Tekstur") {
                                    echo "<span class='badge badge-warning'> Sedikit kasar dan sedikit halus</span>";
                                  } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Tekstur") {
                                    echo "<span class='badge badge-danger'> Kasar </span>";
                                  }
                                  if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Ukuran Limbah Kayu") {
                                    echo "<span class='badge badge-success'>Besar</span>";
                                  } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Ukuran Limbah Kayu") {
                                    echo "<span class='badge badge-warning'>Sedang </span>";
                                  } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Ukuran Limbah Kayu") {
                                    echo "<span class='badge badge-danger'> Kecil </span>";
                                  }
                                  if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Fisik Kayu") {
                                    echo "<span class='badge badge-success'> Keras</span>";
                                  } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Fisik Kayu") {
                                    echo "<span class='badge badge-warning'> Tidak terlalu keras dan tidak terlalu lunak </span>";
                                  } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Fisik Kayu") {
                                    echo "<span class='badge badge-danger'> Lunak </span>";
                                  }
                                  if ($p['nilai'] == "3" && $p['nama_subkriteria'] == "Berat Kayu") {
                                    echo "<span class='badge badge-success'>Berat</span>";
                                  } elseif ($p['nilai'] == "2" && $p['nama_subkriteria'] == "Berat Kayu") {
                                    echo "<span class='badge badge-warning'> Tidak terlalu berat dan tidak terlalu ringan </span>";
                                  } elseif ($p['nilai'] == "1" && $p['nama_subkriteria'] == "Berat Kayu") {
                                    echo "<span class='badge badge-danger'>Ringan</span>";
                                  }
                                  ?></td>
                              <td><?= $p['nilai']; ?></td>
                              <td><?= $p['nilai']; ?> - 3 = <?= $p['selisih']; ?></td>
                              <td><?= $p['nilai_gap']; ?></td>
                    </div>
                  </div>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>

                </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Nilai Rata - Rata Per Faktor</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample2">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-sm table-hover table-bordered" id="display2">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Limbah Kayu</th>
                            <th scope="col">Kriteria</th>
                            <th scope="col">Fakor</th>
                            <th class="text-center" scope="col">Rata - Rata <br>
                              <p style="font-size:10px">(Rata2 Nilai GAP per Faktor)</p>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($hitung as $h) : ?>
                            <tr>
                              <th class="text-center" scope="row"><?= $i ?></th>
                              <td><?= $h['nama_limbah']; ?></td>
                              <td><?= $h['nama_kriteria']; ?></td>
                              <td><?= $h['faktor']; ?></td>
                              <td><?= $h['rata_rata']; ?></td>
                            </tr>
                            <?php $i++; ?>
                          <?php endforeach; ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Nilai Total & Akhir</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample3">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-sm table-hover table-bordered" id="display3">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Limbah Kayu</th>
                            <th scope="col">Kriteria</th>
                            <th class="text-center" scope="col">Nilai Total <br>
                              <p style="font-size:10px">(Rata2 Core x 60%) + (Rata2 Secondary x 40%)</p>
                            </th>
                            <th class="text-center" scope="col">Nilai Akhir <br>
                              <p style="font-size:10px">(Nilai Total x Persentase Kriteria)</p>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($nilaiakhir as $na) : ?>
                            <tr>
                              <th class="text-center" scope="row"><?= $i ?></th>
                              <td><?= $na['nama_limbah']; ?></td>
                              <td><?= $na['nama_kriteria']; ?></td>
                              <td> <?= $na['nilai_total']; ?></td>
                              <td><?= $na['nilai_akhir']; ?></td>
                            </tr>
                            <?php $i++; ?>
                          <?php endforeach; ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Rangking Limbah Kayu</h6>
                </a>

                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-sm table-hover table-bordered" id="display10">

                        <thead>
                          <tr>
                            <th scope=" col">No</th>
                            <th scope="col">Jenis Limbah Kayu</th>
                            <th class="text-center" scope="col">Nilai Rangking<br>
                              <p style="font-size:10px"></p>
                            </th>
                            <th>Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $user = $this->session->userdata('id');

                          $query = "SELECT rangking.id_rangking, limbah.nama_limbah, limbah.id_limbah, rangking.nilai_rangking, user.id FROM rangking 
                                    JOIN limbah ON rangking.id_limbah = limbah.id_limbah
                                    JOIN user ON rangking.id = user.id
                                    AND user.id='$user'";
                          $limbah = $this->db->query($query)->result_array();

                          ?>
                          <?php $i = 1; ?>
                          <?php foreach ($limbah as $k) : ?>
                            <tr>
                              <th class="text-center" scope="row"><?= $i ?></th>
                              <td><?= $k['nama_limbah']; ?></td>
                              <td><?= round($k['nilai_rangking'], 2); ?></td>
                              <td><?php
                                  if ($k['nilai_rangking'] >= 4.5) {
                                    echo "limbah kayu sangat memenuhi kriteria ";
                                  } elseif ($k['nilai_rangking'] >= 4.0) {
                                    echo "limbah kayu cukup memenuhi kriteria ";
                                  } else {
                                    echo "limbah kayu belum sesuai kriteria ";
                                  }
                                  ?></td>
                              <td>
                                <div class="row">
                                  <a href="" data-toggle="modal" data-target="#hapusLimbahModal<?= $k['id_limbah']; ?>" class="btn btn-sm btn-danger mx-auto"><i class="fas fa-trash"></i></a>
                                  <div class="modal fade" id="hapusLimbahModal<?= $k['id_limbah']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLimbahModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="hapusLimbahModalLabel">Hapus Limbah</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                          </button>
                                        </div>
                                        <form action="<?= base_url('spk/hapuslimbahnilai'); ?>" method="post">
                                          <input type="hidden" name="id_limbah" value="<?= $k['id_limbah'] ?>">
                                          <div class="modal-body">Apakah ingin menghapus Limbah <?= $k['nama_limbah'] ?>?</div>
                                          <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>

                                            <button class="btn btn-primary">Hapus</button>

                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <?php $i++; ?>
                          <?php endforeach; ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>




  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->