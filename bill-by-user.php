<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>รายการชำระ</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="css1/bootstrap.min.css" rel="stylesheet">

        <link href="css1/bootstrap-icons.css" rel="stylesheet">

        <link href="css1/owl.carousel.min.css" rel="stylesheet">

        <link href="css1/tooplate-moso-interior.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>


  <!-- Bootstrap CSS -->
  <link href="bootstarp/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
  <?php include 'menu2.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-md">
        <br>
        <div class="" role="alert">
         
        </div>

        <div class="row">
          <center>
            <div class="col-md-6 bg-light text-dark">
          </center>
          <br>
          <table class="table table-primary">
            <tr class="table-warning">
              <th>หมายเลขห้อง</th>
              <th>ค่าเช่าประจำเดือน</th>
              <th>ค่าห้องพัก</th>
              <th>ค่าน้ำ</th>
              <th>ค่าไฟ</th>
              <th>รวมยอดค่าห้อง</th>
              <th>สถานะการชำระเงิน</th>
              <th></th>
              <th></th>

            </tr>
            <?php
            include 'condb.php';
            $sql = "select *,CONCAT(case
          when month_bill =1 then 'มกราคม'
            when month_bill =2 then 'กุมภาพันธ์'
            when month_bill =3 then 'มีนาคม'
            when month_bill =4 then 'เมษายน'
            when month_bill =5 then 'พฤษภาคม'
            when month_bill =6 then 'มิถุนายน'
            when month_bill =7 then 'กรกฏาคม'
            when month_bill =8 then 'สิงหาคม'
            when month_bill =9 then 'กันยายน'
            when month_bill =10 then 'ตุลาคม'
            when month_bill =11 then 'พฤศจิกายน'
            when month_bill =12 then 'ธันวาคม'
                      end,'-',year_bill) yearMonth
            from bill
            where id_room =" . $_SESSION["idroom"] . " ORDER BY datebill DESC";

            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
              $id = $row["id"]
            ?>
              <tr>
             
                <td><?= $row["id_room"] ?></td>
                <td><?= $row["yearMonth"] ?></td>
                <td><h8><?= $row["priceroom"] ?>฿</h8></td>
                <td><h8><?= $row["price_w"] ?>฿</h8></td>
                <td><h8><?= $row["price_e"] ?>฿</h8></td>
                <td><h8><?= $row["pricetotal"] ?>฿</h8></td>
                <td><?= $row["status"] ?></td>

                <td><button class="btn btn-primary" onclick="exportPdf(<?php echo  $id ?>)" id="getPDF">ใบแจ้งค่าห้อง</button></td>
                <td><a href='./user_upload_file.php?id=<?php echo  $id ?>' class="btn btn-success">อัพโหลดหลักฐานชำระเงิน</a></td>
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
 

  </main>


  </div>





</body>

<script>
  function exportPdf(id) {
    // window.location.href = './print_bill.php?id=' + id
    window.open('./print_bill.php?id=' + id, '_blank');
  }
</script>

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
