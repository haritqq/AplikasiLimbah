<!-- Footer -->
<footer class="sticky-footer bg-black">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Kayunich <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih tombol "Keluar" di bawah ini jika Anda yakin ingin keluar. </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Keluar</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/demo/chart-bar-demo.js"></script>

<script src="<?= base_url('assets/'); ?>js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/buttons.bootstrap4.min.js"></script>

<script src="<?= base_url('assets/'); ?>js/jszip.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/pdfmake.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/vfs_fonts.js"></script>

<script src="<?= base_url('assets/'); ?>js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/buttons.colVis.min.js"></script>

<!-- baca gambar -->
<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('img.gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("input.preview_gambar").change(function() {
        bacaGambar(this);
    });
</script>
<!-- akhir baca gambar -->

<!-- notif timeout -->
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000)
</script>
<!-- akhir notif timeout -->

<!-- cek password -->
<script>
    $('input.passwordtambah, input.confirm_passwordtambah').on('keyup', function() {
        if ($('input.passwordtambah').val() == $('input.confirm_passwordtambah').val()) {
            $('small.messagetambah').html('Password Sudah Sama').css('color', 'green');
        } else
            $('small.messagetambah').html('Password tidak sama').css('color', 'red');
    });
</script>
<script>
    $('input.passwordedit, input.confirm_passwordedit').on('keyup', function() {
        if ($('input.passwordedit').val() == $('input.confirm_passwordedit').val()) {
            $('small.messageedit').html('Password Sudah Sama').css('color', 'green');
        } else
            $('small.messageedit').html('Password tidak sama').css('color', 'red');
    });
</script>

<script>
    function onChangeTambah() {
        const password = document.querySelector('.passwordtambah');
        const confirm_password = document.querySelector('.confirm_passwordtambah');
        console.log(confirm_password.value);
        if (confirm_password.value === password.value) {
            confirm_password.setCustomValidity('');
        } else {
            confirm_password.setCustomValidity('Password tidak sama ');
        }
    }
</script>
<script>
    function onChangeEdit() {
        const password = document.querySelector('.passwordedit');
        const confirm_password = document.querySelector('.confirm_passwordedit');
        if (confirm_password.value === password.value) {
            confirm_password.setCustomValidity('');
        } else {
            confirm_password.setCustomValidity('Password tidak sama ');
        }
    }
</script>
<!-- akhir cek password -->


<script>
    $(document).ready(function() {
        $('table.display').DataTable({
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },
        });
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#display1').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },

            "initComplete": function() {
                $("#display1").show();
            },
            "buttons": [{
                extend: 'print',
                exportOptions: {
                    columns: [0, 1, 2, 4, 5, 6, 7]
                }
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display1_wrapper .col-md-6:eq(0)`);
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#display2').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },

            "initComplete": function() {
                $("#display2").show();
            },
            "buttons": [{
                extend: 'print',
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display2_wrapper .col-md-6:eq(0)`);
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#display3').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },

            "initComplete": function() {
                $("#display3").show();
            },
            "buttons": [{
                extend: 'print',
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display3_wrapper .col-md-6:eq(0)`);
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#display4').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },

            "initComplete": function() {
                $("#display4").show();
            },
            "buttons": [{
                    extend: 'copy',
                    exportOptions: {
                        columns: [0, 1, 2]
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    }
                },
            ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display4_wrapper .col-md-6:eq(0)`);
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#display5').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },

            "initComplete": function() {
                $("#display5").show();
            },
            "buttons": [{
                extend: 'print',
                exportOptions: {
                    columns: [0, 1]
                }
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display5_wrapper .col-md-6:eq(0)`);
    });
</script>


<script>
    $(document).ready(function() {
        var table = $('#display6').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },

            "initComplete": function() {
                $("#display6").show();
            },
            "buttons": [{
                extend: 'print',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6]
                }
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display6_wrapper .col-md-6:eq(0)`);
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#display7').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },

            "initComplete": function() {
                $("#display7").show();
            },
            "buttons": [{
                extend: 'print',
                exportOptions: {
                    columns: [0, 1, 2, 3]
                }
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display7_wrapper .col-md-6:eq(0)`);
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#display8').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },

            "initComplete": function() {
                $("#display8").show();
            },
            "buttons": [{
                extend: 'print',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7]
                }
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display8_wrapper .col-md-6:eq(0)`);
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#display9').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },
            "initComplete": function() {
                $("#display9").show();
            },
            "buttons": [{
                extend: 'print',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5]
                }
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display9_wrapper .col-md-6:eq(0)`);
    });
</script>
<script>
    $(document).ready(function() {
        var table = $('#display10').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },
            "initComplete": function() {
                $("#display10").show();
            },
            "buttons": [{
                extend: 'print',
                exportOptions: {
                    columns: [0, 1, 2, 3]
                }
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display10_wrapper .col-md-6:eq(0)`);
    });
</script>
<script>
    $(document).ready(function() {
        var table = $('#display11').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },
            "initComplete": function() {
                $("#display11").show();
            },
            "buttons": [{
                extend: 'print',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6]
                }
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display11_wrapper .col-md-6:eq(0)`);
    });
</script>
<script>
    $(document).ready(function() {
        var table = $('#display12').DataTable({
            //  "dom": 'Blfrtip',
            "aLengthMenu": [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, 'All']
            ],
            "oLanguage": {
                "sInfo": 'Total _TOTAL_ Data ditampilkan (_START_ sampai _END_)',
                "sLengthMenu": 'Tampilkan _MENU_ Data',
                "sInfoEmpty": 'Tidak ada Data.',
                "sSearch": 'Pencarian:',
                "sEmptyTable": 'Tidak ada Data di dalam Database',
                "sZeroRecords": 'Tidak ada data yang cocok',
                "sInfoFiltered": '(tersaring dari _MAX_ total data yang masuk)',
                "oPaginate": {
                    "sNext": 'Selanjutnya',
                    "sLast": 'Terakhir',
                    "sFirst": 'Pertama',
                    "sPrevious": 'Sebelumnya'
                }
            },
            "initComplete": function() {
                $("#display12").show();
            },
            "buttons": [{
                extend: 'print',
                exportOptions: {
                    columns: [0, 1, 2, 3]
                }
            }, ]
            //    bisa ditambah csv,colvis
        });
        table.buttons().container().appendTo(`#display12_wrapper .col-md-6:eq(0)`);
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#berhasil_diambil').DataTable();
        table.buttons().container().appendTo(`#display4_wrapper .col-md-6:eq(0)`);
    });
</script>
<script>
    $(document).ready(function() {
        var table = $('#detail_berhasil').DataTable();
        table.buttons().container().appendTo(`#display4_wrapper .col-md-6:eq(0)`);
    });
</script>





<?php $limbah = $this->db->join('rangking', 'rangking.id_limbah = limbah.id_limbah')->order_by('nilai_rangking', 'desc')->get('limbah')->result_array();
?>

<script type="text/javascript">
    // Bar Chart Example
    var ctx = document.getElementById("myBarChart1");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {

            labels: [

                <?php
                $r = 1;
                foreach ($limbah as $value) :  ?>

                    <?= '"' . $value['nama_limbah'] . ' (Rangking ' . $r . ')",'  ?>
                    <?php $r++; ?>
                <?php endforeach; ?>
            ],

            datasets: [{
                label: "Nilai Rangking",
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",

                data: [
                    //    4215, 5312, 6251, 7841, 9821, 14984

                    <?php foreach ($limbah as $value) :  ?>

                        <?= $value['nilai_rangking'] . ',' ?>

                    <?php endforeach; ?>
                ],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 20
                    },
                    maxBarThickness: 80,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 6,
                        maxTicksLimit: 13,
                        padding: 10,

                        callback: function(value, index, values) {
                            return value;
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 15,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ':' + number_format(tooltipItem.yLabel, 2);
                    }
                }
            },
        }
    });
</script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });


    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });
    });
</script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Nama Barang', 'Jumlah'],
            <?php
            // data yang diambil dari database
            if (count($graph) > 0) {
                foreach ($graph as $data) {
                    echo "['" . $data->nama_brg . "'," . $data->jumlah . "],\n";
                }
            }
            ?>
        ]);

        var options = {
            chart: {
                title: 'Grafik Jumlah Karya Manu Craft',
                subtitle: '',
            }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

<!-- grafik admin dashboard -->
<script>
    var ctx = document.getElementById("myPie");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Donatur", "Toko"],
            datasets: [{
                data: [<?= $this->db->query("SELECT role_id FROM user WHERE role_id = '2'")->num_rows(); ?>,
                    <?= $this->db->query("SELECT role_id FROM user WHERE role_id = '3'")->num_rows(); ?>
                ],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>

<script>
    var ctx = document.getElementById("myBar");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Donasi Limbah", "Karya Toko"],
            datasets: [{
                label: "Total",
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: [
                    <?php echo $limbahkayu ?>,
                    <?php echo $karya ?>
                ],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    // time: {
                    //     unit: 'month'
                    // },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 20,
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return '' + number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                    }
                }
            },
        }
    });
</script>


</body>

</html>