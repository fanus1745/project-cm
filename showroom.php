<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <title>show room</title>
  <style>
  #employeeTable {
    width: 50%; /* ปรับความกว้างของตาราง */
    margin: 0 auto; /* จัดตารางตรงกลางของหน้าเว็บ */
  }

  #employeeTable th,
  #employeeTable td {
    padding: 5px 5px; /* ปรับขนาดของเซลล์ตาราง */
  }

  .btn {
    padding: 5px 5px; /* ปรับขนาดของปุ่ม */
  }
</style>
</head>

<body class="sb-nav-fixed">
  <?php include 'menu.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-md">
        <br>
        <div class="" role="alert">
          <h4>
            <center>ข้อมูลห้อง
          </h4>
          </center>
        </div>

        <div class="row">
          <div class="col-md">
            <a href="type_room.php" class="btn btn-success mb-2">เพิ่มห้อง+</a>




            <!-- <table class="table table-primary">
              <tr class="table-warning">
                <th>หมายเลขห้อง</th>
                <th>ราคา/บาท</th>
                <th>ค่าน้ำ/หน่วย</th>
                <th>ค่าไฟ/หน่วย</th>
                <th>แก้ไข</th>
                <th>ลบ</th>

              </tr>
              <?php
              include 'condb.php';
              $sql = "SELECT * FROM room";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($result)) {
              ?>
                <tr>
                  <td><?= $row["id_room"] ?></td>
                  <td><?= $row["crash"] ?></td>
                  <td><?= $row["water"] ?></td>
                  <td><?= $row["elec"] ?></td>

                  <td><a href="edit_room.php?id=<?= $row["id_room"] ?>" class="btn btn-warning mb-2">EDIT</a></td>
                  <td><a href="delete_room.php?id=<?= $row["id_room"] ?>" class="btn btn-danger mb-2">DELETE</a></td>
                </tr>
              <?php

              }
              mysqli_close($conn);
              ?>
            </table> -->



            <table id="employeeTable" class="table table-primary" style="width:100%">
              <thead>
                <tr class="table-warning">
                  <th>หมายเลขห้อง</th>
                  <th>ราคา/บาท</th>
                  <th>ค่าน้ำ/หน่วย</th>
                  <th>ค่าไฟ/หน่วย</th>
                  <th></th>


                </tr>
              </thead>
              <tbody>
                <?php
                include 'condb.php';


                // คำสั่ง SQL เพื่อดึงข้อมูล
                $sql = "SELECT * FROM room";
                // ดึงข้อมูลจากฐานข้อมูล
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {

                    echo "<tr >";

                    echo "<td>{$row['id_room']}</td>";
                    echo "<td>{$row['crash']}</td>";
                    echo "<td>{$row['water']}</td>";
                    echo "<td>{$row['elec']}</td>";

                    echo "<td> <a href='edit_room.php?id={$row['id_room']}' class='btn btn-warning mb-2'>แก้ไข</a><a style='margin-left: 10px;' href='delete_room.php?id={$row['id_room']}' class='btn btn-danger mb-2 '>ลบ</a> </td>";

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