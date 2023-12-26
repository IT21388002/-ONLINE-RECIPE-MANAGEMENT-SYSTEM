<?php
session_start();
include("php/conn.php");
if (!isset($_SESSION['U_ID'])) {
    echo "<script>alert('Login Failed! Try Again.');</script>";
    echo "<script>window.location.href = '/iwt/IT21386268/login.php';</script>";
}
?>

<!doctype html>
<html lang="en" dir="ltr">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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

                <div class="breadcrumb-header justify-content-between">
                    <div class="my-auto">
                        <div class="d-flex">
                            <h4 class="content-title mb-0 my-auto">Publisher Dashboard</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Profile</h4>
                                <div class="d-flex justify-content-center">
                                    <div class="main-img-user avatar-xxl">
                                        <img alt="avatar" class="rounded-circle" src="assets/img/faces/8.jpg">
                                    </div>
                                </div>
                                <h5 class="text-center mt-2"><?= $_SESSION['U_NAME'] ?></h5>
                                <p class="text-center">Publisher</p>

                                <div class="static-rate text-center fs-30 mt-1 mb-2">
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                </div>

                                <a href="/iwt/IT21388002/Publish_Recipe.php"><button class="btn btn-primary w-100 mb-2">Add New Recipe</button></a>
                                <a href="/iwt/IT21388002/Trending_Recipe.php"><button class="btn btn-primary w-100">Search more Recipe</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Published recipe list</h4>
                                <table class="table table-bordered  ">
                                    <tr>
                                        <th>Date</th>
                                        <th>Recipe</th>
                                        <th>Publisher</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php

                                    $user_ID = $_SESSION['U_ID'];
                                    $sql = "SELECT * FROM recipes,users  WHERE users.U_ID = recipes.R_U_ID  AND  recipes.R_U_ID =  $user_ID ";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?= $row['R_NAME']; ?></td>
                                            <td><?= $row['R_INGREDIENTS']; ?></td>
                                            <td><?= $row['U_NAME']; ?></td>
                                            <td><a href="php/deleteResipe.php?id=<?= $row['R_ID']; ?>" class="btn btn-danger btn-icon"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                </table>


                                <hr>
                                <h4 class="card-title">Downloads</h4>
                                <table class="table table-bordered  ">
                                    <tr>
                                        <th>Date</th>
                                        <th>Recipe</th>
                                        <th>View</th>
                                    </tr>
                                    <?php
                                    $ID = $_SESSION['U_ID'];
                                    $sql = "SELECT * FROM downloads,recipes WHERE recipes.R_ID = downloads.D_R_ID AND downloads.D_USER = $ID  ";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?= $row['D_DATE']; ?></td>
                                            <td><?= $row['R_NAME']; ?></td>
                                            <td><a href="/iwt/IT21387012/Download.php?action=downloaded&id=<?= $row['R_ID']; ?>" class="btn btn-success">View</a></td>
                                        </tr>
                                    <?php } ?>
                                </table>


                            </div>
                        </div>
                    </div>


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

    <!--- Jquery.Coutdown js --->
    <script src="assets/plugins/jquery-countdown/jquery.lwtCountdown-1.0.js"></script>
    <script src="assets/plugins/jquery-countdown/count-down.js"></script>
</body>

</html>