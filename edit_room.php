<?php
include 'condb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM room WHERE id_room='$id'";
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

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <title>Editroom</title>


</head>

<body class="sb-nav-fixed">
    <?php include 'menu.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-md">
                <div class="row">

                    <br>
                    <center>
                        <div class="alert alert-primary h4" role="alert">
                            แก้ไขข้อมูลห้อง
                        </div>
                    </center>
                    <form method="POST" action="update_room.php">


                        หมายเลขห้อง<input type="number" name="nroom" maxlength="3" class="form-control" readonly value=<?= $row['id_room'] ?>>
                        ราคา<input type="number" name="nprice" class="form-control" value=<?= $row['crash'] ?>>
                        ค่าน้ำ/หน่วย<input type="number" name="nw" maxlength="10" class="form-control" value=<?= $row['water'] ?>>
                        ค่าไฟ/หน่วย<input type="number" name="ne" maxlength="10" class="form-control" value=<?= $row['elec'] ?>><br>
                        <input type="submit" value="บันทึก" class="btn btn-success">

                        <a href="showroom.php" class="btn btn-danger">ย้อนกลับ</a>


                    </form>

                </div>

        </main>
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