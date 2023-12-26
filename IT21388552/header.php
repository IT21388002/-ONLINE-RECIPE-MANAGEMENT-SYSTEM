<div class="main-header nav nav-item hor-header " style="background-color: #f84a67;">
    <div class="container">
        <div class="main-header-left ">
            <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
            <a class="header-brand" href="#">
                <img src="assets/img/brand/logo-white.png" class="desktop-dark">
                <img src="assets/img/brand/logo.png" class="desktop-logo">
                <img src="assets/img/brand/favicon.png" class="desktop-logo-1">
                <img src="assets/img/brand/favicon-white.png" class="desktop-logo-dark">
            </a>
            <div class="main-header-center  ml-4">
                <form action="php/search.php" method="post"><input class="form-control" name="search" placeholder="Search..." type="search"><button type="submit" class="btn"><i class="fe fe-search"></i></button></form>
            </div>
        </div><!-- search -->
        <div class="main-header-right">
            <a href="/iwt/IT21386268/login.php" class="btn btn-primary">Login</a>
            <div class="nav nav-item  navbar-nav-right ml-auto">

                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href="#"><img alt="" src="assets/img/faces/6.jpg"></a>
                    <?php if (isset($_SESSION['U_NAME'])) { ?>
                        <div class="dropdown-menu">
                            <div class="main-header-profile bg-primary p-3">
                                <div class="d-flex wd-100p">
                                    <div class="main-img-user"><img alt="" src="assets/img/faces/6.jpg" class=""></div>
                                    <div class="ml-3 my-auto">
                                        <h6><?= $_SESSION['U_NAME'] ?></h6><span>Premium Member</span>
                                    </div>
                                </div>
                            </div>


                            <?php

                            if ($_SESSION["U_TYPE"] == 'BUYER') {
                                echo '<a class="dropdown-item" href="/iwt/IT21388934/Buyer_Dashboard.php"><i class="bx bx-user-circle"></i>Profile</a>';
                            } else if ($_SESSION["U_TYPE"] == 'PUBLISHER') {
                                echo '<a class="dropdown-item" href="/iwt/IT21388552/Publisher_Dashboard.php"><i class="bx bx-user-circle"></i>Profile</a>';
                            }
                            if ($_SESSION["U_TYPE"] == 'ADMIN') {
                                echo '<a class="dropdown-item" href="/iwt/IT21386268/Admin_Dashboard.php"><i class="bx bx-user-circle"></i>Profile</a>';
                            }
                            ?>
                            <a class="dropdown-item" href="php/logout.php"><i class="bx bx-log-out"></i> Sign Out</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>