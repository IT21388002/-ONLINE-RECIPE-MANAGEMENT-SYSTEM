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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
                            <h4 class="content-title mb-0 my-auto">Admin Dashboard</h4>
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
                                <p class="text-center">Admin</p>

                                <div class="static-rate text-center fs-30 mt-1 mb-2">
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                </div>

                                <a href="/iwt/IT21388002/Publish_Recipe.php"><button class="btn btn-primary w-100 mb-2">Add New Recipe</button></a>
                                <a href="/iwt/IT21387012/Messages.php"><button class="btn btn-primary w-100">Messages</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Overview</h4>
                            </div>
                            <div class="card-body d-flex justify-content-center">

                                <canvas id="myChart" style="width:100%;max-width:500px"></canvas>

                            </div>
                        </div>
                    </div>


                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Net Earning</h4>
                            </div>
                            <div class="card-body d-flex justify-content-center">

                                <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>

                            </div>
                        </div>
                    </div>

                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recipe Download</h4>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card-body ">
                                        <canvas id="myChart2" style="width:100%;max-width:1000px"></canvas>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card-body ">
                                        <canvas id="myChart3" style="width:100%;max-width:1000px"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="row">



                    <?php

                    $sql = "SELECT * FROM recipes  LIMIT 4";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>


                        <div class="col-md-3 col-lg-3 col-xl-3  col-sm-6">
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

    <script>
        var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = ["red", "green", "blue", "orange", "brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true
                }
            }
        });
    </script>

    <script>
        var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

        new Chart("myChart1", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    borderColor: "red",
                    fill: false
                }, {
                    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                    borderColor: "green",
                    fill: false
                }, {
                    data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                    borderColor: "blue",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: false
                }
            }
        });
    </script>

    <script>
        var xValues = ["Italy", "France"];
        var yValues = [55, 49];
        var barColors = [
            "#b91d47",
            "#00aba9"
        ];

        new Chart("myChart2", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true
                }
            }
        });
    </script>

    <script>
        var xValues = ["Italy", "France"];
        var yValues = [55, 49];
        var barColors = [
            "#b91d47",
            "#00aba9"
        ];

        new Chart("myChart3", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true
                }
            }
        });
    </script>
</body>

</html>