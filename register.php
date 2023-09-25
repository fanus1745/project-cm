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
    <title>Register</title>


</head>

<body style="background-color: #6096b4;">
    <div class="container-md">
        <br>
        <div class="row">
            <!--<div class="col-md-6 bg-light text-dark">--->
            <div class="alert alert-primary h4" role="alert">
                สมัครสมาชิก
            </div>
            <center>
                <div class="col-md-6 ">
            </center>
            <div class="card shadow-md border-5 rounded-md mt-4">

                <form method="POST" action="insert_register.php">


                <font style="float:right"size="5" color="#FF0000">*</font> ชื่อ<input type="text" name="name" class="form-control" required>
                <font style="float:right"size="5" color="#FF0000">*</font>นามสกุล<input type="text" name="lastname" class="form-control" required>
                <font style="float:right"size="5" color="#FF0000">*</font>เบอร์โทร<input type="number" name="tel" maxlength="10" class="form-control" required>
                <font style="float:right"size="5" color="#FF0000">*</font>ชื่อผู้ใช้งาน<input type="text" name="username" maxlength="10" class="form-control" required placeholder="ชื่อผู้ใช้งาน">
                <font style="float:right"size="5" color="#FF0000">*</font>รหัสผ่าน<input type="password" name="password" maxlength="10" class="form-control" required placeholder="ตัวอักษรหรือตัวเลขอย่างน้อย3ตัวขึ้นไป"><br>
                    <center><input type="submit" name="submit" value="บันทึกข้อมูล" class="btn btn-success">

                        <a href="showrepair.php" class="btn btn-secondary ">ย้อนกลับ</a><br>
                    </center>



                </form>
            </div>
        </div>
    </div>

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