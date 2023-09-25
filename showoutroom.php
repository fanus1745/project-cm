<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>outroom</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <style>
    #employeeTable th,
    #employeeTable td {
      padding: 3px; /* ปรับขนาดของเซลล์ตาราง */
    }
  </style>
</head>

<body class="sb-nav-fixed">

  <?php include 'menu.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-md">
        <!-- <h4 align="center" style="color: red;">แสดงห้องทั้งหมด</h4>-->
        <br>
        <div class="" role="alert">
          <h4>
            <center>ข้อมูลการแจ้งย้ายออก
          </h4>
          </center>
        </div>

        <a href="addoutroom.php" class="btn btn-success mb-2">แจ้งย้ายออก+</a>




        <table id="employeeTable" class="table table-primary" style="width:100%">
          <thead>
            <tr class="table-warning">
              <th>หมายเลขห้อง</th>
              <th>วันที่ย้าย</th>
              <th>รายละเอียดเพิ่มเติม</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'condb.php';


            // คำสั่ง SQL เพื่อดึงข้อมูล
            $sql = "SELECT id,id_room,date_out,case when detail is null then '-' else detail end as detail FROM `out_room`";
            // ดึงข้อมูลจากฐานข้อมูล
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {

                echo "<tr >";
                echo "<td>{$row['id_room']}</td>";
                echo "<td>{$row['date_out']}</td>";
                echo "<td>{$row['detail']}</td>";
                echo "<td> <a href='delete_outroom.php?id={$row['id']}' class='btn btn-danger mb-2'>ยกเลิกการย้ายห้อง</a><a style='margin-left: 10px;' href='reset_room.php?id={$row['id']}' class='btn btn-success mb-2 '>ย้ายห้องเรียบร้อยแล้ว</a> </td>";

                echo "</tr>";
              }
            }

            // ปิดการเชื่อมต่อกับฐานข้อมูล
            $conn->close();
            ?>
          </tbody>
        </table>







      </div>
  </div>
  </div>
  </main>
  </div>
  </div>
  <script src="js/datatables-simple-demo.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#employeeTable').DataTable();
    });
  </script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>