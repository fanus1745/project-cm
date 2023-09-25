<?php
include 'condb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tenent WHERE id_room='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>add tenent</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="bootstarp/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    <?php include 'menu.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-md">
                <br>
                <div class="row">
                    <div class="col-md">
                        <div class="" role="alert">
                            <h4>
                                <center>ข้อมูลผู้เช่า
                            </h4>
                            </center>
                        </div><br>
                        <form name="form1" method="post" action="insert_tenent.php">
                            <center><label>หมายเลขห้อง</label>
                                <input type="text" name="id_room" class="form=control" value="<?php echo $row['id_room']; ?>" readonly><font size="5" color="#FF0000">*</font>
                            </center><br>
                            <label>วันที่เข้าอยู่</label>
                            <font style="float:right"size="5" color="#FF0000">*</font>
                            <input readonly type="date" name="date_in" class="form-control" value="<?php echo $row['date_in']; ?>"><br>
                            <label>ชื่อ</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input value="<?php echo $row['name']; ?>" readonly type="text" name="name" class="form-control" required placeholder="ชื่อผู้เช่า"><br>
                            <label>นามสกุล</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input value="<?php echo $row['lastname']; ?>" readonly type="text" name="lastname" class="form-control" required placeholder="นามสกุลผู้เช่า"><br>
                            <label>อายุ</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input value="<?php echo $row['age']; ?>" readonly type="text" name="age" class="form-control" required placeholder="อายุ"><br>
                            <label>สัญชาติ</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input value="<?php echo $row['cunty']; ?>" readonly type="text" name="cunty" class="form-control" required placeholder="สัญชาติ"><br>
                            <label>ที่อยู่</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input value="<?php echo $row['address']; ?>" readonly type="text" name="address" class="form-control" required placeholder="ที่อยู่"><br>
                            <label>เบอร์โทร</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input value="<?php echo $row['tel']; ?>" readonly type="text" name="tel" class="form-control" required placeholder="เบอร์โทร" minlength="10" maxlength="10"><br>
                            <a href="test.php" class="btn btn-danger">ย้อนกลับ</a>
                            <br>



                        </form>
                    </div>
                </div>
            </div>
    </div>
    </main>
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