<?php
session_start();
include("php/conn.php");
?>

<!doctype html>
<html lang="en" dir="ltr">


<head>


    <!-- Title -->
    <title> RECIPE MARK </title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon" />

    <!-- Bootstrap css-->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css -->
    <link href="assets/css/icons.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!-- Style css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-dark.css" rel="stylesheet">


    <!-- Maps css -->
    <link href="assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">


    <!-- Skinmodes css -->
    <link href="assets/css/skin-modes.css" rel="stylesheet" />

    <!-- Animations css -->
    <link href="assets/css/animate.css" rel="stylesheet">

    <!---Switcher css-->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="assets/switcher/demo.css" rel="stylesheet">
</head>

<body class="main-body">


    <!-- Loader -->
    <div id="global-loader">
        <img src="assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-header -->
        <?php include("header.php") ?>
        <!-- /main-header -->
        <!--Horizontal-main -->
        <?php include("nav.php") ?>
        <!--Horizontal-main -->


        <!-- main-content opened -->
        <div class="main-content horizontal-content">
            <!-- container opened -->
            <div class="container">

                <div class="col-lg-12c col-md-12c">
                    <div>
                        <div class="carousel slide" data-ride="carousel" id="carouselExample4">
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#carouselExample4"></li>
                                <li data-slide-to="1" data-target="#carouselExample4"></li>
                                <li data-slide-to="2" data-target="#carouselExample4"></li>
                            </ol>
                            <div class="carousel-inner bg-dark">
                                <div class="carousel-item active">
                                    <img alt="img" class="d-block w-100 op-3" src="assets/img/slider/1.jpg">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First Slide</h5>
                                        <p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img alt="img" class="d-block w-100 op-3" src="assets/img/slider/2.jpg">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second Slide</h5>
                                        <p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img alt="img" class="d-block w-100 op-3" src="assets/img/slider/3.jpg">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third Slide</h5>
                                        <p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="card-title mt-4">Most Downloaded</h4>
                <hr>
                <div class="row row-sm">
                    <?php

                    $sql = "SELECT * FROM recipes  LIMIT 3";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>


                        <div class="col-md-4 col-lg-4 col-xl-4  col-sm-6">
                            <a href="/iwt/IT21387012/Download.php?id=<?= $row['R_ID'] ?>">
                                <div class="card">
                                    <div class="card-body h-100">
                                        <div class="pro-img-box">
                                            <div class="d-flex product-sale">
                                                <div class="badge bg-pink"><?= $row['R_TYPE'] ?></div>
                                                <i class="mdi mdi-heart-outline ml-auto wishlist"></i>
                                            </div>
                                            <img class="w-100" src="/iwt/IT21388002/assets/img/uploads/<?= $row['R_PHOTO'] ?>" alt="product-image">
                                            <a href="#" class="adtocart"> <i class="las la-shopping-cart "></i>
                                            </a>
                                        </div>
                                        <div class="text-center pt-3">
                                            <h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase"><?= $row['R_NAME'] ?></h3>
                                            <span class="tx-15 ml-auto">
                                                <i class="ion ion-md-star text-warning"></i>
                                                <i class="ion ion-md-star text-warning"></i>
                                                <i class="ion ion-md-star text-warning"></i>
                                                <i class="ion ion-md-star-half text-warning"></i>
                                                <i class="ion ion-md-star-outline text-warning"></i>
                                            </span>
                                            <h4 class="h5 mb-0 mt-2 text-center font-weight-bold text-danger">LKR <?= $row['R_PRICE'] ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php } ?>




                </div>


                <h4 class="card-title mt-3">Best Publisher</h4>
                <hr>
                <div class="row row-sm">

                    <?php

                    $sql = "SELECT * FROM users WHERE U_TYPE = 'PUBLISHER' LIMIT 6";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <div class="col-md-2 col-lg-2 col-xl-2  col-sm-6">
                            <div class="card">
                                <div class="card-body h-100">
                                    <div class="pro-img-box">
                                        <img class="w-100" src="assets/img/faces/1.jpg" alt="product-image">
                                        <a href="#" class="adtocart"> <i class="fa fa-user" aria-hidden="true"></i>

                                        </a>
                                    </div>
                                    <div class="text-center pt-3">
                                        <h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase"><?= $row['U_NAME'] ?></h3>
                                        <span class="tx-15 ml-auto">
                                            <i class="ion ion-md-star text-warning"></i>
                                            <i class="ion ion-md-star text-warning"></i>
                                            <i class="ion ion-md-star text-warning"></i>
                                            <i class="ion ion-md-star-half text-warning"></i>
                                            <i class="ion ion-md-star-outline text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php } ?>


                </div>





            </div>
            <!-- Container closed -->
        </div>
        <!-- main-content closed -->



        <!-- Footer opened -->
        <?php include("footer.php"); ?>
        <!-- Footer closed -->
    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Ionicons js -->
    <script src="assets/plugins/ionicons/ionicons.js"></script>

    <!-- Moment js -->
    <script src="assets/plugins/moment/moment.js"></script>

    <!-- P-scroll js -->
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!-- eva-icons js -->
    <script src="assets/js/eva-icons.min.js"></script>

    <!-- Rating js-->
    <script src="assets/plugins/rating/jquery.rating-stars.js"></script>
    <script src="assets/plugins/rating/jquery.barrating.js"></script>

    <!-- Horizontalmenu js-->
    <script src="assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- Right-sidebar js -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>
    <script src="assets/plugins/sidebar/sidebar-custom.js"></script>


    <!--Internal  Chart.bundle js -->
    <script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>

    <!--Internal Sparkline js -->
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Raphael js -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>

    <!--Internal Apexchart js-->
    <script src="assets/js/apexcharts.js"></script>

    <!-- Internal Map -->
    <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <!--Internal  index js -->
    <script src="assets/js/index.js"></script>
    <script src="assets/js/jquery.vmap.sampledata.js"></script>


    <!-- custom js -->
    <script src="assets/js/custom.js"></script>

    <!-- Switcher js -->
    <script src="assets/switcher/js/switcher.js"></script>
</body>

<!-- Mirrored from codeigniter.spruko.com/valex/ltr/public/pages/horizontal-light by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 14:27:03 GMT -->

</html>