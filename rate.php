
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rate</title>
    <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<?php include 'menu.php'; ?>
<div id="layoutSidenav_content">
                <main>
<div class="container">
<br>
<div class="h4 text-center  mb-4 " role="alert">
    อัตราค่าบริการ
        
</div>
    
  <div class="row">
    <div class="col-md">
   <!-- <a href="register.php" class="btn btn-success mb-2">ADD+</a>-->
    <table class="table table-primary">
        <tr class="table-warning">
        <th>ลำคับ</th>
         <th>รายการ</th>
         <th>ราคา</th>
         <th></th>
         <th></th>

       </tr>
    <?php
    include 'condb.php';
    $sql = "SELECT * FROM rate";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
     ?>
        <tr>
        
          <td><?=$row["id"]?></td>
          <td><?=$row["name"]?></td>
          <td><h8><?=$row["price"]?>฿</h8></td>
        
          <td><a href="edit_rate.php?id=<?=$row["id"]?>" class="btn btn-warning mb-2">แก้ไข</a></td>
          <td><a href="delete_member.php?id=<?=$row["id"]?>" class="btn btn-danger mb-2">ลบ</a></td>
        </tr>
    <?php
    
    }
      mysqli_close($conn);
    ?>
    </table>
    </div>
    </main>
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
