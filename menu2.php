<?php
session_start();

if (!isset($_SESSION["username"]))
    header("location:login.php");

?>
<!--<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
     Navbar Brand
    <a class="navbar-brand ps-3" href="index2.php">CM APARTMENT</a>-->
   
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

    </form>
    <!-- Navbar-->

    <!--<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>-->


<!--<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <div class="sb-sidenav-menu-heading"></div>

                    <a class="nav-link" href="index2.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        หน้าหลัก
                    </a>
                     <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i></i></div>
                        ห้องเช่า

                    </a> 
                    <a class="nav-link" href="bill-by-user.php">
                        <div class="sb-nav-link-icon"><i></i></div>
                        บิลห้องเช่า
                    </a>

                    <a class="nav-link" href="repair.php">
                        <div class="sb-nav-link-icon"><i></i></div>
                        แจ้งซ่อม
                    </a>

                    <a class="nav-link" href="outroom.php">
                        <div class="sb-nav-link-icon"><i></i></div>
                        แจ้งย้ายออก
                    </a>
                    <a class="nav-link" href="profile.php">
                        <div class="sb-nav-link-icon"><i></i></div>
                        ข้อมูลส่วนตัว
                    </a>

                    <a class="nav-link" href="https://liff.line.me/1645278921-kWRPP32q/?accountId=696pujsw" target="_blank">
                        <div class="sb-nav-link-icon"><i></i></div>
                        ติดต่อเรา
                    </a>





                </div>
            </div>

        </nav>
    </div>-->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index2.php" >CM <span class="tooplate-red"></span><span class="tooplate-green">:</span></a>
                <?php
    if (isset($_SESSION["firtsname"])) {
        echo "<div class='text-success'>";
        echo "ห้อง" . " " . $_SESSION["idroom"] ;
        echo "</div></center>";
    }

    ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll"   href="index2.php">หน้าหลัก</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="bill-by-user.php">ใบแจ้งค่าเช่า</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll"href="repair.php">แจ้งซ่อม</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="outroom.php">แจ้งย้ายออก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="profile.php">ข้อมูลส่วนตัว</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="logout.php"><img src="img/out.png"  alt="" width="50" height="50"></i></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        