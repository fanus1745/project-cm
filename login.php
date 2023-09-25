<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<style>
</style>

<body style="background-color: #6096b4;">
    <div class="container">
        <br>
        <center><img src="img/flat.png" width="200" alt=""></center>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-md border-2 rounded-md mt-4">
                    <div class="text-center">
                    </div>
                    <div class="card-header">
                        <h4 class="text-center font-weight-light my-6">เข้าสู่ระบบ CM อพาทเม้นท์</h4>
                    

                    </div><br>
                    <form method="POST" action="login_check.php">
                        <input type="text" name="username" class="form-control" required placeholder="ชื่อผู้ใช้งาน"><br>
                        <input type="password" name="password" class="form-control" required placeholder="รหัสผ่าน"><br>
                        <?php
                        if (isset($_SESSION["Error"])) {
                            echo "<div class='text-danger'>";
                            echo $_SESSION["Error"];
                            echo "</div>";
                        }


                        ?>
                        <div class="row">
                            <div class="col-6" style="text-align: right;">
                                <input type="submit" name="submit" value="เข้าสู่ระบบ" class="btn btn-primary">
                            </div>
                            <div class="col-6" style="text-align: left;">
                                <a href="register.php"><input type="button" name="button" value="สมัครสมาชิก" class="btn btn-success"></a>
                            </div>
                        </div>
                        <br>


                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- <a href="register.php">Register</a>-->
    </div>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>