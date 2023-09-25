<?php
include 'condb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM repair WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$rowx = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>แจ้งซ่อม</title>
    
<link href="css1/bootstrap.min.css" rel="stylesheet">

<link href="css1/bootstrap-icons.css" rel="stylesheet">

<link href="css1/owl.carousel.min.css" rel="stylesheet">

<link href="css1/tooplate-moso-interior.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
   
</head>

<body class="sb-nav-fixed">
    <?php include 'menu2.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-md">
                <br>
                <div class="row">
                    <div class="col-md">
                        <div class="" role="alert">
                            <h4>
                                <center>แจ้งซ่อม
                            </h4>
                            </center>
                        </div><br>
                        <form name="form1" method="post" action="update_repair_user.php">

                            <input hidden id="xIdRoom" value="<?= $rowx['id_room'] ?>">
                            <input hidden id="xStatus" value="<?= $rowx['status'] ?>">
                            <input hidden id="id" name="id" value="<?= $id  ?>">

                            <label>เลือกห้อง</label><br>


                            <input readonly name="id_room" id="id_room" class="form-control" value="<?php echo $_SESSION["idroom"] ?>">

                            <br>
                            <label>รายการซ่อม</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input type="text" name="crash" class="form-control" value="<?= $rowx['crash'] ?>" required placeholder="รายการซ่อม">


                            <br>
                            <label>รายละเอียดเพิ่มเติม</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input type="text" name="detail" class="form-control" value="<?= $rowx['detail'] ?>" required placeholder="รายละเอียดเพิ่มเติม"><br>

                            <label>สถานะ</label><br>
                            <input readonly name="status" id="status" class="form-control" value="<?= $rowx['status'] ?>">
                            <br>
                            <button type="summit" class="btn btn-success">บันทึก</button>
                            <a href="repair.php" class="btn btn-secondary ">ย้อนกลับ</a><br>

                        </form>
                    </div>
                </div>
            </div>
           
    </div>
    </main>
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

<script>
    document.getElementById('id_room').value = document.getElementById('xIdRoom').value
    document.getElementById('status').value = document.getElementById('xStatus').value
</script>