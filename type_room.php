<?php
include 'condb.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>add room</title>
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
        <div class="" role="alert">
          <h4>
            <center>เพิ่มห้องเช่า
          </h4>
          </center>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!--<div class="alert alert-primary h4 text-center" role="alert">
  เพิ่มห้องเช่า
</div>-->
            <form name="form1" method="post" action="insert_typeroom.php">
              
              <label>หมายเลขห้อง</label>
              <font style="float:right"size="5" color="#FF0000">*</font><br>
              <input type="text" name="nroom" class="form-control" placeholder="หมายเลขห้อง" required><br>
              <!--<label>ประเภทห้อง</label><br>
<input type="text" name="nnr" class="form=control" placeholder="ประเภทห้อง"  required><br>-->
              <label>ราคาห้อง/บาท</label>
              <font style="float:right"size="5" color="#FF0000">*</font><br>
              <input type="number" name="nprice" class="form-control" min="0" readonly required><br>
              <label>ค่าน้ำ/หน่วย</label>
              <font style="float:right"size="5" color="#FF0000">*</font><br>
              <input type="number" name="nw" class="form-control" min="0" readonly required><br>
              <label>ค่าไฟ/หน่วย</label>
              <font style="float:right"size="5" color="#FF0000">*</font><br>
              <input type="number" name="ne" class="form-control" min="0" readonly required><br><br>
              <button type="summit" class="btn btn-success">บันทึก</button>
              <input type="reset" name="cancle" value="ยกเลิก" class="btn btn-danger">

            </form>
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