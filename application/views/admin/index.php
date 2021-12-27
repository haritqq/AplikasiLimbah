<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <h6 class="m-0 mb-3 font-weight-bold text-primary">Dashboard</h6>

    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-200">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Donasi Limbah Kayu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $limbahkayu ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <!-- <a href="<?= base_url('spk/kriteria'); ?>" class="btn  btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Detail Kriteria</span>
                </a> -->
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Karya Limbah Kayu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $karya ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-award fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <!-- <a href="<?= base_url('spk/subkriteria'); ?>" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Detail Sub Kriteria</span>
                </a> -->
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Donatur</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_donatur ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <!-- <a href="<?= base_url('spk/limbah'); ?>" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Detail Limbah Kayu </span>
                </a> -->
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Toko</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_toko ?>
                                <!-- <h6 class="font-weight-bold text-xs  badge badge-primary ">Limbah Kayu telah dinilai</h6> -->
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas  fa-store fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <!-- <a href="<?= base_url('spk/penilaian'); ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Lihat Detail Penilaian</span>
                </a> -->
            </div>
        </div>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Grafik jumlah karya toko dan donasi limbah</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myBar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Grafik jumlah toko dan Donatur yang terdaftar</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPie"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> Toko
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> Donatur
                                </span>
                                <!-- <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> Referral
                                </span> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>





        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->