<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>repair room</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  
  <link href="css1/bootstrap.min.css" rel="stylesheet">

<link href="css1/bootstrap-icons.css" rel="stylesheet">

<link href="css1/owl.carousel.min.css" rel="stylesheet">

<link href="css1/tooplate-moso-interior.css" rel="stylesheet">

  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  


</head>

<body class="sb-nav-fixed">
  <?php include 'menu2.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      
      <div class="container-md">
        <br>
        <div class="" role="alert">
          <h4>
            <center>แจ้งซ่อมอุปกรณ์
          </h4>
          </center>
        </div>

        <div class="row">
          <center>
            <div class="col-md-6 bg-light text-dark">
          </center>
          <br>

          <div> <a href="addrepair-user.php" class="btn btn-success mb-2">แจ้งซ่อม+</a></div>
          <table class="table table-primary">
            <tr class="table-warning">
              <th>หมายเลขห้อง</th>
              <th>ชื่อรายการซ่อม</th>
              <th>รายละเอียด</th>
              <th>วันที่แจ้ง</th>

              <th></th>

              <th></th>

            </tr>
            <?php
            include 'condb.php';
            $sql = "SELECT * FROM repair where id_room ="  . $_SESSION["idroom"];
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
              <tr>
                <td><?= $row["id_room"] ?></td>
                <td><?= $row["crash"] ?></td>
                <td><?= $row["detail"] ?></td>
                <td><?= $row["date_crash"] ?></td>

                <td><a href="editrepair-user.php?id=<?= $row["id"] ?>" class="btn btn-warning mb-2">แก้ไข</a></td>
                <td><a href="delete_repair_user.php?id=<?= $row["id"] ?>" class="btn btn-danger mb-2">ลบ</a></td>
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