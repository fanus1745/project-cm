
<?php
session_start();
if (!isset($_SESSION["username"]))
    header("location:login.php");

?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index1.php">CM APARTMENT</a>

    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

    </form>
    <!-- Navbar-->

    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <!--<li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>-->
                <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <?php
                    if (isset($_SESSION["firtsname"])) {
                        echo "<center><div class='text-success'>";
                        echo $_SESSION["firtsname"] . " " . $_SESSION["lastname"];
                        echo "</div></center>";
                    }

                    ?>
                    <div class="sb-sidenav-menu-heading"></div>

                    <a class="nav-link" href="index1.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        หน้าหลัก
                    </a>
                    <a class="nav-link" href="test.php">
                        <div class="sb-nav-link-icon"><i></i></div>
                        ห้องเช่า

                    </a>
                    <a class="nav-link" href="tenent-list.php">
                        <div class="sb-nav-link-icon"><i></i></div>
                        ผู้เช่า
                    </a>
                    <a class="nav-link" href="bill.php">
                        <div class="sb-nav-link-icon"><i></i></div>
                        คำนวณค่าเช่า
                    </a>
                    <a class="nav-link" href="bill-list.php">
                        <div class="sb-nav-link-icon"><i></i></div>
                        ค่าเช่า
                    </a>
                    <a class="nav-link" href="showrepair.php">
                        <div class="sb-nav-link-icon"><i></i></div>
                        แจ้งซ่อม
                    </a>
                    <a class="nav-link" href="showoutroom.php">
                        <div class="sb-nav-link-icon"><i></i></div>
                        แจ้งย้ายออก
                    </a>
                   

                    <div class="sb-sidenav-menu-heading">------------------------------------</div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        จัดการ
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="userinformation.php">ผู้ใช้งานระบบ</a>
                            <a class="nav-link" href="showroom.php">ข้อมูลห้อง</a>
                            <!-- <a class="nav-link" href="#">ข้อมูลผู้เช่า</a> -->
                            <a class="nav-link" href="rate.php">อัตราค่าบริการ</a>

                            <!-- <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>-->
                        </nav>
                    </div>
                    <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> -->
                </div>
            </div>

        </nav>
        
    </div>
    