<?php
//connect database
include 'condb.php';
//query
$query = "SELECT * FROM room ORDER BY id_room ASC";
$result = mysqli_query($conn, $query);



$query2 = "SELECT count(*) as roomCount FROM room ";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_array($result2);

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
 
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <title>ROOMER</title>

</head>

<body class="sb-nav-fixed" style="background-color: #ffffff;">
  <?php include 'menu.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-md">
        <br>
        <div class="" role="alert">
          <h4>
            <center>จำนวนห้องทั้งหมดมี <?php echo $row2['roomCount'];  ?> ห้อง
          </h4>
          </center>
        </div>
        <hr>
        <p>*เขียว = ว่าง, แดง = ไม่ว่าง</p>
        <div class="row" style="margin-bottom: 10px;">
          <?php foreach ($result as  $row) {
            if ($row['floor'] == 1) {

              if ($row['status'] == 0) {

                echo '<div class="col col-md-2 col-sm-2" style="margin: 3px;">';
                echo '<a href="tenent2.php?id=' . $row["id_room"] . '&act=booking"class="btn btn-success" >' . $row['id_room'] . '</a></div>';
              } else {

                echo '<div class="col col-md-2 col-sm-2" style="margin: 3px;">';
                // echo '<a href="" class="btn btn-danger" >' . $row['id_room'] . '</a></div>';
                echo '<a href="tenent3.php?id=' . $row["id_room"] . '&act=booking"class="btn btn-danger" >' . $row['id_room'] . '</a></div>';
              }
            }
          } ?>
        </div>



        <hr>

        <div class="row" style="margin-bottom: 10px;">
          <?php foreach ($result as  $row) {
            if ($row['floor'] == 2) {
              if ($row['status'] == 0) {
                echo '<div class="col col-md-2 col-sm-2" style="margin: 3px;">';
                echo '<a href="tenent2.php?id=' . $row["id_room"] . '&act=booking"class="btn btn-success" >' . $row['id_room'] . '</a></div>';
              } else {

                echo '<div class="col col-md-2 col-sm-2" style="margin: 3px;">';
                // echo '<a href="" class="btn btn-danger" >' . $row['id_room'] . '</a></div>';
                echo '<a href="tenent3.php?id=' . $row["id_room"] . '&act=booking"class="btn btn-danger" >' . $row['id_room'] . '</a></div>';
              }
            }
          } ?>
        </div>

        <hr>

        <div class="row" style="margin-bottom: 10px;">
          <?php foreach ($result as  $row) {
            if ($row['floor'] == 3) {
              if ($row['status'] == 0) {
                echo '<div class="col col-md-2 col-sm-2" style="margin: 3px;">';
                echo '<a href="tenent2.php?id=' . $row["id_room"] . '&act=booking"class="btn btn-success" >' . $row['id_room'] . '</a></div>';
              } else {

                echo '<div class="col col-md-2 col-sm-2" style="margin: 3px;">';
                // echo '<a href="" class="btn btn-danger" >' . $row['id_room'] . '</a></div>';
                echo '<a href="tenent3.php?id=' . $row["id_room"] . '&act=booking"class="btn btn-danger" >' . $row['id_room'] . '</a></div>';
              }
            }
          } ?>
        </div>

      </div>
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