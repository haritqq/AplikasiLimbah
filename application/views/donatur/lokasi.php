<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/assets/assets_shop/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>/assets/assets_shop/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>/assets/assets_shop/css/clean-blog.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

    <!--control search -->
    <script src="<?php echo base_url() ?>leaflet-search/src/leaflet-search.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>leaflet-search/src/leaflet-search.css" />


</head>

<body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <!--QUERY MENU-->
            <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
            FROM `user_menu` JOIN `user_access_menu`
            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
            WHERE `user_access_menu`.`role_id`= $role_id
            ORDER BY `user_access_menu`.`menu_id` ASC";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>

        </div>
    </nav>
    <!-- Begin Page Content -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="text-center">

        </div>

        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <div id="map" style="width: 100%; height: 500px;"></div>


        <script>
            //data from database
            var data = [
                <?php foreach ($geo as $key => $value) { ?>, {
                        "latitude": [<?= $value->latitude ?>, <?= $value->longitude ?>],
                        "nama_tempat": "<?= $value->nama_tempat ?>",
                        "no_telpon": "<?= $value->no_telpon ?>",
                        "alamat": "<?= $value->alamat ?>"
                    },

                <?php } ?>
            ];



            var map = new L.Map('map', {
                zoom: 10,
                center: new L.latLng(-7.800018, 110.370381)
            });

            map.addLayer(new L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/dark-v10',
                tileSize: 512,
                zoomOffset: -1
            }));


            //layer contain searched elements
            var markersLayer = new L.LayerGroup();
            map.addLayer(markersLayer);
            var controlSearch = new L.Control.Search({
                position: 'topleft',
                layer: markersLayer,
                initial: false,
                zoom: 18,
                marker: false
            });
            map.addControl(new L.Control.Search({
                layer: markersLayer,
                initial: false,
                collapsed: true,
                zoom: 18,
            }));

            ////////////populate map with markers from sample data
            for (i in data) {
                var nama_tempat = data[i].nama_tempat; //value searched
                var alamat = data[i].alamat; //position found
                var latitude = data[i].latitude; //position found
                var no_telpon = data[i].no_telpon;
                var marker = new L.Marker(new L.latLng(latitude), {
                    title: nama_tempat
                }); //se property searched
                marker.bindPopup('<b>' + nama_tempat + '</b>' + '<br> Nomor Telpon : ' + no_telpon + '<br> Alamat : ' + alamat);
                markersLayer.addLayer(marker);
            }

            L.circle([-7.800018, 110.370381], {
                radius: 9000
            }).addTo(map);
        </script>




    </div>
    <!-- /.container-fluid -->

    </div>
    <hr>
    <!-- End of Main Content -->