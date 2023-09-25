<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>out room</title>


        <link href="css1/bootstrap.min.css" rel="stylesheet">

        <link href="css1/bootstrap-icons.css" rel="stylesheet">

        <link href="css1/owl.carousel.min.css" rel="stylesheet">

        <link href="css1/tooplate-moso-interior.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS 
  <link href="bootstarp/css/bootstrap.min.css" rel="stylesheet">-->
</head>

<body class="sb-nav-fixed">
  <?php include 'menu2.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-md">
        <br>
        <div class="" role="alert">
          <h4>
            <center>แจ้งย้ายออก
          </h4>
          </center>
        </div>

        <div class="row">
          <center>
            <div class="col-md-6 bg-light text-dark">
          </center>
          <br>

          <font size="3" color="#FF0000">*ต้องแจ้งล่วงหน้าอย่างน้อย 15 วัน</font>
          
          <form method="POST" action="insert_outroom_user.php">
          <br>
          <font style="float:right"size="5" color="#FF0000">*</font>ย้ายออกวันที่<input type="date" name="date_out" class="form-control" required value="<?php echo date('Y-m-d'); ?>">
            หมายเลขห้อง<input readonly type="text" value="<?php echo $_SESSION["idroom"] ?>" name="id_room" maxlength="3" class="form-control" required>
            
            <font style="float:right"size="5" color="#FF0000">*</font>รายละเอียด<input type="text" name="detail" class="form-control" required>
            <br>

            <input type="submit" name="submit" value="บันทึก" class="btn btn-success">
            <!-- 
            <input type="reset" name="cancle" value="CANCEL" class="btn btn-danger"> -->


            <br>
            <br>
          </form>

          <table class="table table-primary">
            <tr class="table-warning">
              <th>หมายเลขห้อง</th>
              <th>วันที่ย้าย</th>
              <th>รายละเอียดเพิ่มเติม</th>
              <th></th>

            </tr>
            <?php
            include 'condb.php';
            $sql = "SELECT id,id_room,date_out,case when detail is null then '-' else detail end as detail FROM `out_room` where id_room =" . $_SESSION["idroom"];
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
              <tr>
                <td><?= $row["id_room"] ?></td>
                <td><?= $row["date_out"] ?></td>
                <td><?= $row["detail"] ?></td>
                <td><a href="delete_outroom_user.php?id=<?= $row["id"] ?>" class="btn btn-danger mb-2">ยกเลิกการย้ายห้อง</a></td>
              </tr>
            <?php

            }
            mysqli_close($conn);
            ?>
          </table>
        </div>
      </div>
  </div>
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