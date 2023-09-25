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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <title>ผู้เช่า</title>

</head>

<body class="sb-nav-fixed" style="background-color: #ffffff;">
  <?php include 'menu.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-md">
        <br>
        <div class="" role="alert">
          <h4>
            <center>ข้อมูลผู้เช่าห้อง
          </h4>
          </center>
        </div>


        <table id="employeeTable" class="table table-primary" style="width:100%">
          <thead>
            <tr>
              
              <th>หมายเลขห้อง</th>
              <th>ชื่อ</th>
              <th>นามสกุล</th>
              <th>รหัสบัตรประชาชน</th>
              <th>เบอร์โทรศัพท์</th>
              <th>วันที่ย้ายเข้า</th>

            </tr>
          </thead>
          <tbody>
            <?php
            include 'condb.php';


            // คำสั่ง SQL เพื่อดึงข้อมูล
            $sql = "SELECT * FROM `tenent` inner join room on room.id_room=tenent.id_room and room.status=1";
            
            

            // ดึงข้อมูลจากฐานข้อมูล
            $result = $conn->query($sql);
            

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {

                echo "<tr class=\"table-warning\">";
                
                echo "<td>{$row['id_room']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['lastname']}</td>";
                echo "<td>{$row['id_card']}</td>";
                echo "<td>{$row['tel']}</td>";
                echo "<td>{$row['date_in']}</td>";
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
  </div>
  </div>
  </main>
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