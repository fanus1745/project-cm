<?php
include 'condb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM rate WHERE id='$id'";
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
    <title>Edit</title>
</head>

<body class="sb-nav-fixed">
    <?php include 'menu.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <div class="row">

                    <br>
                    <center>
                        <div class="alert alert-primary h4" role="alert">
                            แก้ไขอัตราคาบริการ
                        </div>
                    </center>
                    <form method="POST" action="update_rate.php">

                        ลำดับ<input type="text" name="id" maxlength="3" class="form-control" readonly value=<?= $row['id'] ?>>
                        ชื่อ<input type="text" name="name" class="form-control" readonly value=<?= $row['name'] ?>>
                        ราคา<input type="text" name="price" class="form-control" value=<?= $row['price'] ?>><br>

                        <input type="submit" value="บันทึก" class="btn btn-success">

                        <a href="rate.php" class="btn btn-danger">ย้อนกลับ</a>


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