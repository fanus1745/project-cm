<?php
session_start();
include 'condb.php';

$sql = "SELECT * FROM member WHERE id_room='".$_SESSION["idroom"]."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />


    <link href="css1/bootstrap.min.css" rel="stylesheet">

<link href="css1/bootstrap-icons.css" rel="stylesheet">

<link href="css1/owl.carousel.min.css" rel="stylesheet">

<link href="css1/tooplate-moso-interior.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
 
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <title>ข้อมูลส่วนตัว</title>


</head>

<body class="sb-nav-fixed">
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
                            <a class="nav-link click-scroll" href="index2.php">หน้าหลัก</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="bill-by-user.php">ใบแจ้งหนี้</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="repair.php">แจ้งซ่อม</a>
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
        <br>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-md">
                <div class="row"><br>
                
        <div class="" role="alert">
          <h4>
            <center>ข้อมูลส่วนตัว
          </h4>
          </center>
        </div>
                   
                    <form method="POST" action="update_profile_user.php">


                    หมายเลขห้อง<input type="number" name="idroom" maxlength="3" class="form-control" value="<?= $row['id_room'] ?>"readonly>
                        ชื่อ<input type="text" name="firstname" class="form-control" value=<?= $row['name'] ?>>
                        นามสกุล<input type="text" name="lastname" class="form-control" value=<?= $row['lastname'] ?>>
                        เบอร์โทร<input type="number" name="phone" maxlength="10" class="form-control" value=<?= $row['tel'] ?>>
                        ชื่อผู้ใช้งาน<input type="text" name="username" maxlength="10" class="form-control" value=<?= $row['username'] ?>>
                        รหัสผ่าน<input type="password" name="password" maxlength="10" class="form-control" value=<?= $row['password'] ?>><br>
                        <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
                        


                        



                    </form>

                </div>
        </main>

    </div>
    
    </div>
</body>

</html>
<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>