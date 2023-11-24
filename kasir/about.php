<?php

require 'ceklogin.php';
$h1 = mysqli_query($c, "select * from pesanan");
$h2 = mysqli_num_rows($h1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/tambahan.scss" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('./img/bg.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">
            <img src="./img/Gojo.png" width="30" height="30" class="mb-1" alt="">
            Gojo-Toon
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">MENU</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-shopping-cart"></i></div>
                            Order
                        </a>
                        <a class="nav-link" href="stock.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-pie-chart"></i></div>
                            Stock Barang
                        </a>
                        <a class="nav-link" href="masuk.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-plus-square"></i></div>
                            Barang Masuk
                        </a>
                        <a class="nav-link" href="pelanggan.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                            Kelola Pelanggan
                        </a>
                        <a class="nav-link" href="about.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                            Tentang Kami
                        </a>
                        <a class="nav-link" href="logout.php">
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content" class="bg-$gray-300">
            <div>
                <h1 class="mt-4 mb-4 text-center">Tentang Kami</h1>
            </div>
            <section class="light">
                <div class="container py-2">
                    <article class="postcard light yellow">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="./img/gojo.png" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title yellow"><a href="#">Gojo-Toon</a></h1>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                Gojo-Toon di dirikan tahun 2018. Toko ini menjual berbagai macam furniture jejepangan
                                dengan harga yang terjangkau dan hemat dikantong pelajar, Toko ini menjadi salah satu
                                tokoh terbaik seindonesia dalam penjualan barang jejepangan dengan kualitas yang
                                terbaik. Di toko ini juga banyak memberikan diskon setiap harinya sampai 70%, tokoh ini beroperasi dari jam 08:00 sampai 17:00.
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            <!-- <div class="card" style="width: 18rem;">
                <img src="./img/gojo (2).png" class="card-img-top" alt="...">
                <div class="card-body ">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>  
                </div> -->
            <div class="garis">
                <h1 class="mt-4 mb-4 text-center">Tim Kami</h1>
            </div>
            <div class="container text-center" style="width: 95%;">
                <div class="row justify-content-around my-3">
                    <div class="col-4 card" style="width: 15rem;">
                        <img src="./img/gua.jpg" class="mt-2 card-img-top" alt="..">
                        <div class="card-body">
                            <h5 class="card-title">Ashabhil Haqqi</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="col-4 card" style="width: 15rem;">
                        <img src="./img/rafsan.jpg" class="mt-2 card-img-top" alt="..">
                        <div class="card-body">
                            <h5 class="card-title">Rafsan Hidayat</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="col-4 card" style="width: 15rem;">
                        <img src="./img/foto.jpg" class="mt-2 card-img-top" alt="..">
                        <div class="card-body">
                            <h5 class="card-title">Rais Dafa Aldri</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="col-4 card" style="width: 15rem;">
                        <img src="./img/naila.jpg" class="mt-2 card-img-top" alt="..">
                        <div class="card-body">
                            <h5 class="card-title">Naila Suhada</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center" style="width: 75%;">
                <div class="row justify-content-around my-3">

                </div>
            </div>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>