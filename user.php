<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: index.php");
} else {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css' rel='stylesheet' />
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">
        <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js">
        </script>

        <title>Jawara Resto</title>
    </head>

    <body>

        <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
                <h1 class="display-4"><span class="font-weight-bold">JAWARA RESTO</span></h1>
                <hr>
                <p class="lead font-weight-bold">Silahkan Pesan Menu Sesuai Keinginan Anda <br>
                    Enjoy Your Meal</p>
            </div>
        </div>
        <!-- Akhir Jumbotron -->

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand text-white" href="user.php"><strong>JAWARA</strong> RESTO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link mr-4" href="user.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-4" href="menu_pembeli.php">DAFTAR MENU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-4" href="pesanan_pembeli.php">PESANAN CUSTOMER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-4" href="logout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Akhir Navbar -->

        <!-- Menu -->
        <div class="container" style="margin-top: 8%;">

            <div class="row mb-5 mt-5 ">
                <div class="col-md-6 d-flex justify-content-end ">
                    <div class="card bg-dark text-white border-light">
                        <img src="images/background/bgmenu.jpg" class="card-img" alt="Lihat Daftar Menu">
                        <div class="card-img-overlay mt-5 text-center">
                            <a href="menu_pembeli.php" class="btn text-white">LIHAT DAFTAR MENU</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-start">
                    <div class="card bg-dark text-white border-light">
                        <img src="images/background/kasir.jpg" class="card-img" alt="Lihat Pesanan">
                        <div class="card-img-overlay mt-5 text-center">
                            <a href="pesanan_pembeli.php" class="btn text-white">LIHAT PESANAN</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="judul text-center mt-5">
                <h3 class="font-weight-bold">Alamat </h3>
                <h5>Jl. Satria Kulon I
                    <br>Buka Jam <strong>09:00 - 22:00</strong>
                </h5>
                <center>
                    <div id="peta" style="width: 600px;height: 400px;"></div>
                </center>
            </div>

        </div>
        <!-- Akhir Menu -->

        <!-- Awal Footer -->
        <hr class="footer">
        <div class="container">
            <div class="row footer-body">
                <div class="col-md-6">
                    <div class="copyright">
                        <strong>Copyright</strong> <i class="far fa-copyright"></i> 2022 - Designed by Kelompok Limbo</p>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-end">
                    <div class="icon-contact">
                        <label class="font-weight-bold">Follow Us </label>
                        <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
                        <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
                        <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Footer -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script>
            mapboxgl.accessToken =
                'pk.eyJ1IjoiZWxtYXJpYWNoaWkiLCJhIjoiY2w0ZXcyZ3ltMDFpbDNqcXJkbW93NHpyYiJ9.yXen73uhCggvG8NmvExFGw';
            var map = new mapboxgl.Map({
                container: 'peta', //id elemen html
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [107.5739733668771, -
                    6.94893420051067
                ], //koordinat lokasi garis bujur dan lintang,longitude dan latitude
                zoom: 14 // starting zoom
            });

            var geocoder = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl,
                marker: false,
                // placeholder: 'Masukan kata kunci...',
                zoom: 20
            });

            map.addControl(
                geocoder
            );

            let marker = null
            map.on('click', function(e) {
                if (marker == null) {
                    marker = new mapboxgl.Marker()
                        .setLngLat(e.lngLat)
                        .addTo(map);
                } else {
                    marker.setLngLat(e.lngLat)
                }
                lk = e.lngLat
            });
        </script>
    </body>

    </html>
<?php } ?>