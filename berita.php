<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN 8 Bandar Lampung</title>

    <link rel="icon" href="styling/img/favicon.ico" type="image/x-icon" />
    <!------------ GOOGLE FONTS ------------>
    <link href="https://fonts.googleapis.com/css?family=Anton|Cabin|Lato|Fjalla+One|Montserrat|Roboto&display=swap" rel="stylesheet">
    <!------------ FONT AWESOME ------------>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="styling/style.css">
</head>

<body>
    <div class="wrapper">
        <nav class="navbar fixed-top navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">
                    <img src="styling/img/logoe.png" alt="Logo" height="50px" class="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="tentang.php" class="nav-link">Tentang Sekolah</a>
                        </li>
                        <li class="nav-item">
                            <a href="jurusan.php" class="nav-link">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a href="eskul.php" class="nav-link">Ekstrakurikuler</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Informasi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="berita.php">Berita</a></li>
                                <li><a class="dropdown-item" href="pengumuman.php">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="kegiatan.php">Kegiatan</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div style="margin-top: 100px;" class="content">
    <div class="news">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="section_title_container text-center">
                                            <h2 class="section_title">Informasi Terkini</h2>
                                            <div class="section_subtitle font-grey">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php for ($i=0; $i < 5; $i++) { 
                                    ?>
                                <div class="row news_row">
                                    <div class="col-md-4 news_col">

                                        <!-- News Post Large -->
                                        <div class="news_post_large_container">
                                            <div class="news_post_large">
                                                <div class="news_post_image"><img src="styling/img/bg-1.jpg" alt=""></div>
                                                <div class="news_post_large_title"><a href="blog_single.html">Here???s What You Need to Know About Online Testing for the ACT and SAT</a></div>
                                                <div class="news_post_meta">
                                                    <ul>
                                                        <li><a href="#">admin</a></li>
                                                        <li><a href="#">november 11, 2017</a></li>
                                                    </ul>
                                                </div>
                                                <div class="news_post_text">
                                                    <p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take. Can America learn anything from other nations...</p>
                                                </div>
                                                <div class="news_post_link"><a href="blog_single.html">read more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 news_col">

                                        <!-- News Post Large -->
                                        <div class="news_post_large_container">
                                            <div class="news_post_large">
                                                <div class="news_post_image"><img src="styling/img/bg-1.jpg" alt=""></div>
                                                <div class="news_post_large_title"><a href="blog_single.html">Here???s What You Need to Know About Online Testing for the ACT and SAT</a></div>
                                                <div class="news_post_meta">
                                                    <ul>
                                                        <li><a href="#">admin</a></li>
                                                        <li><a href="#">november 11, 2017</a></li>
                                                    </ul>
                                                </div>
                                                <div class="news_post_text">
                                                    <p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take. Can America learn anything from other nations...</p>
                                                </div>
                                                <div class="news_post_link"><a href="blog_single.html">read more</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 news_col">
                                        <div class="news_posts_small">

                                            <!-- News Posts Small -->
                                            <div class="news_post_small">
                                            <div class="news_post_image"><img src="styling/img/firaun.jpeg" width="250" alt=""></div>
                                                <div class="news_post_small_title"><a href="blog_single.html">Home-based business insurance issue (Spring 2017 - 2018)</a></div>
                                                <div class="news_post_meta">
                                                </div>
                                            </div>

                                            <!-- News Posts Small -->
                                            <div class="news_post_small">
                                            <div class="news_post_image"><img src="styling/img/firaun.jpeg" width="250" alt=""></div>
                                                <div class="news_post_small_title"><a href="blog_single.html">2018 Fall Issue: Credit Card Comparison Site Survey (Summer 2018)</a></div>
                                                <div class="news_post_meta">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

    </div>
    <footer class="text-center text-lg-start text-white">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 link-light"><i class="fab fa-facebook-f"></i></a>
                <a href="" class="me-4 link-light"><i class="fab fa-twitter"></i></a>
                <a href="" class="me-4 link-light"><i class="fab fa-google"></i></a>
                <a href="" class="me-4 link-light"><i class="fab fa-instagram"></i></a>
                <a href="" class="me-4 link-light"><i class="fab fa-linkedin"></i></a>
                <a href="" class="me-4 link-light"><i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto mb-2">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-2">
                            <i class="md-3 text-secondary"></i>SMK NEGERI 8 Bandar Lampung
                        </h6>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="250" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=smkn%208%20bandar%20lampung&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 250px;
                                        width: 250px;
                                    }
                                </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 250px;
                                        width: 250px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-1 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">
                            Links
                        </h6>
                        <p>
                            <a href="index.php" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="jurusan.php" class="text-reset">Jurusan</a>
                        </p>
                        <p>
                            <a href="ekskul.php" class="text-reset">Ekstrakurikuler</a>
                        </p>
                        <p>
                            <a href="tentang.php" class="text-reset">Tentang</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-2 mx-auto mb-4">
                        <img class="img" src="styling/img/logo.png" height="200px">
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto  mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">Contact</h6>
                        <p><i class="fas fa-home md-3 text-light"></i> Jl.Imam Bonjol No.52, Kemiling Raya Bandar Lampung</p>
                        <p>
                            <i class="fas fa-envelope md-3 text-light"></i>
                            smkn8bdl@yahoo.com
                        </p>
                        <p><i class="fas fa-phone md-3 text-light"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print md-3 text-light"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            ?? 2023 Copyright:
            <a class="text-reset fw-bold" href="https://panfateam.com/">PANFA Team</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="styling/style.js"></script>
</body>

</html>