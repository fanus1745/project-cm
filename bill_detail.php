<?php
include 'condb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM  bill WHERE id='$id'";
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
    <title>รายละเอียดชำระเงิน</title>


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
                            รายละเอียดชำระเงิน
                        </div>
                    </center>
                    <form method="POST" action="success_bill.php ">
                        <div class="row">
                            <div class="col-10">

                                <input hidden name="id" value="<?= $row['id'] ?>">


                                หมายเลขห้อง<input type="number" name="nroom" maxlength="3" class="form-control" readonly value=<?= $row['id_room'] ?>>

                                รวมยอดค่าห้อง<input type="number" readonly name="ne" maxlength="10" class="form-control" value=<?= $row['pricetotal'] ?>><br>

                                <img width="25%" src="./uploads/<?= $row['filename'] ?>" class="img-thumbnail">


                            </div>
                        </div>


                        <br>
                        <input type="submit" value="บันทึก" class="btn btn-success">

                        <a href="bill-list.php" class="btn btn-danger">ยกเลิก</a>


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