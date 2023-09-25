<?php
//connect database
include 'condb.php';
//query
$query = "SELECT * FROM room ORDER BY id_room ASC";
$result = mysqli_query($conn, $query);
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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <title>จัดการบิลค่าห้อง</title>
  <style>
    #employeeTable th,
    #employeeTable td {
      padding: 3px; /* ปรับขนาดของเซลล์ตาราง */
    }
  </style>
</head>

<body class="sb-nav-fixed" style="background-color: #ffffff;">
  <?php include 'menu.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-md">
        <!-- <h4 align="center" style="color: red;">แสดงห้องทั้งหมด</h4>-->
        <br>
        <div class="" role="alert">
          <h4>
            <center>ข้อมูลค่าเช่าประจำเดือน
          </h4>
          </center>
        </div>

        <br>



        <table id="employeeTable" class="table table-primary" style="width:100%">
          <thead>
            <tr>
              <th>หมายเลขห้อง</th>
              <th>ค่าเช่าประจำเดือน</th>
              <th>ค่าห้อง</th>
              <th>ค่าน้ำ</th>
              <th>ค่าไฟ</th>
              <th>ค่าเคเบิล</th>
              <th>ค่าส่วนกลาง</th>
              <th>รวมยอดค่าห้อง</th>
              <th>สถานะการชำระเงิน</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'condb.php';


            // คำสั่ง SQL เพื่อดึงข้อมูล
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
              where Year(now())=year_bill 
              ORDER BY datebill DESC";

            // ดึงข้อมูลจากฐานข้อมูล
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                
                echo "<tr>";
                echo "<td>{$row['id_room']}</td>";
                echo "<td>{$row['yearMonth']}</td>";
                echo "<td><h8>{$row['priceroom']}฿</h8> </td>";
                echo "<td><h8>{$row['price_w']}฿</h8> </td>";
                echo "<td><h8>{$row['price_e']}฿</h8> </td>";
                echo "<td><h8>100฿</h8> </td>";
                echo "<td><h8>50฿</h8> </td>";
                echo "<td><h8>{$row['pricetotal']}฿</h8> </td>";
                echo "<td><h8>{$row['status']}</h8> </td>";
                // echo "<td> <a href='success_bill.php?id={$row['id']}' class='btn btn-success mb-2'>ยืนยันการชำระเงิน</a> </td>";

                echo "<td> <a href='bill_detail.php?id={$row['id']}' class='btn btn-success mb-2'>ดูรายละเอียดชำระเงิน</a> </td>";

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
<script>
  function getRoomDetail(event) {

    let id = event.target.value

    var xhr = new XMLHttpRequest();
    xhr.open('GET', './get_room_detail.php?id=' + id, true);
    xhr.onload = function() {
      if (this.status == 200) {

        let data = JSON.parse(this.responseText)
        document.getElementById('room_price').value = data.crash
        document.getElementById('bill_water_before').value = data.water_no
        document.getElementById('bill_elec_before').value = data.electric_no
        document.getElementById('bill_water_rate').value = data.water
        document.getElementById('bill_elec_rate').value = data.elec
        gettotal()
      }
    }
    xhr.send()

  }

  function onKeyWater(e) {
    const afterValue = e.target.value
    const beforeValue = document.getElementById('bill_water_before').value

    const totalWater = parseInt(afterValue) - parseInt(beforeValue)

    document.getElementById('bill_water_meter').value = totalWater

    const bill_water_rate = document.getElementById('bill_water_rate').value


    document.getElementById('bill_water_total').value = parseInt(totalWater) * parseInt(bill_water_rate)
    gettotal()
  }

  function onKeyElec(e) {
    const afterValue = e.target.value
    const beforeValue = document.getElementById('bill_elec_before').value

    const totalElec = parseInt(afterValue) - parseInt(beforeValue)

    document.getElementById('bill_elec_meter').value = totalElec

    const bill_elec_rate = document.getElementById('bill_elec_rate').value


    document.getElementById('bill_elec_total').value = parseInt(totalElec) * parseInt(bill_elec_rate)
    gettotal()
  }

  function gettotal() {


    const totalElec = document.getElementById('bill_elec_total').value ?? 0
    const totalWater = document.getElementById('bill_water_total').value ?? 0
    const roomPrice = document.getElementById('room_price').value ?? 0

    document.getElementById('pay_total').value = parseInt(totalElec) + parseInt(totalWater) + parseInt(roomPrice) + 150
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>