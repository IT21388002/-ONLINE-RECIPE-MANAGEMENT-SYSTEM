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
                            <h4 class="content-title mb-0 my-auto">Payment</h4>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <?php
                    $R_ID = $_GET['id'];
                    $sql = "SELECT * FROM recipes WHERE R_ID = $R_ID  LIMIT 1";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>

                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
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
                                </div>
                            </div>
                        </div>


                    <?php } ?>


                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="card card-body pd-20 pd-md-40 border shadow-none">
                                        <h5 class="card-title mg-b-20">Your Payment Details</h5>
                                        <div class="form-group">
                                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Name on Card</label> <input class="form-control" required="" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Card Number</label>
                                            <div class="pos-relative">
                                                <input class="form-control pd-r-80" required="" type="text">
                                                <div class="d-flex pos-absolute t-5 r-10"><img alt="" class="wd-30 mg-r-5" src="assets/img/visa.png"> <img alt="" class="wd-30" src="assets/img/mastercard.png"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row row-sm">
                                                <div class="col-sm-9">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Expiration Date</label>
                                                    <div class="row row-sm">
                                                        <div class="col-sm-7">
                                                            <select class="form-control select2-no-search">
                                                                <option label="Choose one">
                                                                </option>
                                                                <option value="January">
                                                                    January
                                                                </option>
                                                                <option value="February">
                                                                    February
                                                                </option>
                                                                <option value="March">
                                                                    March
                                                                </option>
                                                                <option value="April">
                                                                    April
                                                                </option>
                                                                <option value="May">
                                                                    May
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-5 mg-t-10 mg-sm-t-0">
                                                            <select class="form-control select2-no-search">
                                                                <option label="Choose one">
                                                                </option>
                                                                <option value="2018">
                                                                    2018
                                                                </option>
                                                                <option value="2019">
                                                                    2019
                                                                </option>
                                                                <option value="2020">
                                                                    2020
                                                                </option>
                                                                <option value="2021">
                                                                    2021
                                                                </option>
                                                                <option value="2022">
                                                                    2022
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mg-t-20 mg-sm-t-0">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">CVC</label> <input class="form-control" required="" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mg-b-20">
                                            <label class="ckbox"><input checked type="checkbox"><span class="tx-13">Save my card for future purchases</span></label>
                                        </div>
                                        <a href="php/paymentAction.php?id=<?= $R_ID ?>"><button class="btn btn-main-primary btn-block">Complete Payment</button></a>
                                    </div>

                                </div>
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