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
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

  <title>จัดการบิลค่าห้อง</title>

</head>

<body class="sb-nav-fixed" style="background-color: #ffffff;">
  <?php include 'menu.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-md">
        <!-- <h4 align="center" style="color: red;">แสดงห้องทั้งหมด</h4>-->
        <br>
        <!--<div class="alert alert-warning" role="alert">
          <h4>
            <center>คำนวณค่าเช่า
          </h4>
          </center>
        </div>-->


        <form action="insert_bill.php" method="post">
          <div class="row g-3 align-items-center mb-3">
            <div class="col-sm-2">
            
              <label class="col-form-label">หมายเลขห้อง</label><font size="5" color="#FF0000">*</font>
              
            </div>
            
            <div class="col-sm-2">

              <?php

              include 'condb.php';

              $sql = "SELECT id_room FROM room where status=1";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {

                echo "<select class='form-control' name='id_room'  required onchange='getRoomDetail(event)' >";
                echo "<option value='' selected='selected'>-- เลือกห้อง --</option>";
                while ($row = $result->fetch_assoc()) {
                  $optionId = $row['id_room'];
                  $optionName = $row['id_room'];
                  echo "<option value='$optionId'>$optionName</option>";
                }
                echo "</select>";
              } else {
                echo "No options found.";
              }

              ?>
            </div>
            <div class="col-sm-2">
              <label class="col-form-label">ค่าห้องพัก(บาท)</label>
            </div>
            <div class="col-sm-2">
              <input type="text" name="room_price" id="room_price" required class="form-control" readonly>
              <input type="text" hidden name="room_price2" id="room_price2" required class="form-control" readonly>
            </div>

          </div>
          <div class="row g-3 align-items-center mb-3">

            <div class="col-sm-2">
            
              <label class="col-form-label">เลือกวันที่</label><font size="5" color="#FF0000">*</font>
            </div>
            <div class="col-sm-2">
             <input onchange="dateChange()" type="date" name="dateStart" id="dateStart"  required class="form-control" value="<?php echo date('Y-m-d'); ?>">
            </div>

          </div>
          <input hidden id="bill_month" name="bill_month">

          <!-- <div class="row g-3 align-items-center mb-3">

            <div class="col-sm-2">
              <label class="col-form-label">รอบบิล</label>
            </div>
            <div class="col-sm-2">
              <select name="bill_month" class="form-control" required>
                <option value="">เลือกรอบบิล</option>
                <option value="1">มกราคม </option>
                <option value="2">กุมภาพันธ์ </option>
                <option value="3">มีนาคม </option>
                <option value="4">เมษายน </option>
                <option value="5">พฤษภาคม </option>
                <option value="6">มิถุนายน </option>
                <option value="7">กรกฏาคม </option>
                <option value="8">สิงหาคม </option>
                <option value="9">กันยายน </option>
                <option value="10">ตุลาคม </option>
                <option value="11">พฤศจิกายน </option>
                <option value="12">ธันวาคม </option>
              </select>

            </div>
          </div> -->




            <div class="row g-3 align-items-center mb-3">
              <div class="col-sm-2">
                <label class="col-form-label">ค่าน้ำ</label>
              </div>

              <div class="col-sm-2">
             
                เลขมิเตอร์ครั้งนี้ <font size="5" color="#FF0000">*</font>
                <input type="number" name="bill_water_now" id="bill_water_now" onkeyup="onKeyWater(event)" required class="form-control" min="1">
              </div>
              <div class="col-sm-2">
                
                ครั้งก่อน
                <input type="number" name="bill_water_before" id="bill_water_before" required readonly class="form-control" min="0" value="0">
              </div>
              <div class="col-sm-2">
                หน่วยที่ใช้
                <input type="text" name="bill_water_meter" id="bill_water_meter" readonly class="form-control" min="0">
              </div>
              <div class="col-sm-2">
                ราคา/หน่วย
                <input type="number" name="bill_water_rate" id="bill_water_rate" readonly class="form-control" min="0" value="0">
              </div>
              <div class="col-sm-2">
                รวม(บาท)
                <input type="text" name="bill_water_total" id="bill_water_total" required class="form-control" min="0" value="0">
              </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
              <div class="col-sm-2">
                <label class="col-form-label">ค่าไฟ</label>
              </div>

              <div class="col-sm-2">
              
                เลขมิเตอร์ครั้งนี้ <font size="5" color="#FF0000">*</font>
                <input type="number" name="bill_elec_now" id="bill_elec_now" required class="form-control" onkeyup="onKeyElec(event)" min="1">
              </div>
              <div class="col-sm-2">
                ครั้งก่อน
                <input type="number" name="bill_elec_before" id="bill_elec_before" readonly class="form-control" min="0" value="0">
              </div>
              <div class="col-sm-2">
                หน่วยที่ใช้
                <input type="number" name="bill_elec_meter" id="bill_elec_meter" readonly class="form-control" min="0">
              </div>
              <div class="col-sm-2">
                ราคา/หน่วย
                <input type="number" name="bill_elec_rate" id="bill_elec_rate" readonly class="form-control" min="0" value="0">
              </div>
              <div class="col-sm-2">
                รวม(บาท)
                <input type="text" value="0" name="bill_elec_total" id="bill_elec_total" required readonly class="form-control" min="0">
              </div>
            




            <div class="row g-3 align-items-center mb-3">
              <div class="col-sm-2">
                <label class="col-form-label">ค่าอื่นๆ(บาท)</label>
              </div>

              <div class="col-sm-2">
                ค่าบริการ(เคเบิล)
                <input type="number" name="kble" id="kble" value="100" readonly class="form-control">
              </div>
              <div class="col-sm-2">
                ค่าส่วนกลาง
                <input type="number" name="centerPrice" id="centerPrice" readonly class="form-control" min="0" value="50">
              </div>

            </div>





            <div class="row g-3 align-items-center mb-3">
              <div class="col-sm-2">
                <label class="col-form-label">รวมทั้งสิ้น(บาท)</label>
              </div>
              <div class="col-sm-3">
                <input type="text" name="pay_total" id="pay_total" value="0" required readonly class="form-control" placeholder="รวมทั้งสิ้น" min="0">
              </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
              <div class="col-sm-2">
                <label class="col-form-label"></label>
              </div>
              <div class="col-sm-4">
                <button type="submit" class="btn btn-success"> บันทึก</button>
              </div>
            </div>

        </form>

        <br>

        ]

      </div>
  </div>
  </div>
  </div>
  </div>
  </main>
  </div>

</body>

</html>
<script>
 function dateChange() {

  const dateInput = document.getElementById('dateStart').value;
    const selectedDate = new Date(dateInput);
    const month = selectedDate.getMonth();
    document.getElementById('bill_month').value = month + 1;
    gettotal();
}

// เพิ่ม event listener เพื่อเรียกใช้ฟังก์ชั่น dateChange เมื่อมีการเปลี่ยนแปลงใน input date
document.getElementById('dateStart').addEventListener('change', dateChange);

// เพิ่ม event listener เพื่อกำหนดค่าเริ่มต้นให้กับ input date เป็นวันที่ปัจจุบัน
document.addEventListener('DOMContentLoaded', function () {
    const currentDate = new Date();
    const currentDateString = currentDate.toISOString().split('T')[0];
    document.getElementById('dateStart').value = currentDateString;
    dateChange();
     // เพิ่มส่วนนี้เพื่อกำหนดค่าเริ่มต้นให้กับ room_price และ room_price2
     const roomIdSelect = document.querySelector('select[name="id_room"]');
    if (roomIdSelect.value) {
      getRoomDetail({ target: { value: roomIdSelect.value } });
    } else {
      document.getElementById('room_price').value = 0;
      document.getElementById('room_price2').value = 0;
    }
});



  function getRoomDetail(event) {

    let id = event.target.value

    var xhr = new XMLHttpRequest();
    xhr.open('GET', './get_room_detail.php?id=' + id, true);
    xhr.onload = function() {
      if (this.status == 200) {

        let data = JSON.parse(this.responseText)
        document.getElementById('room_price').value = data.crash
        document.getElementById('room_price2').value = data.crash
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
    const totalElec = parseFloat(document.getElementById('bill_elec_total').value) || 0;
    const totalWater = parseFloat(document.getElementById('bill_water_total').value) || 0;
    let roomPrice = parseFloat(document.getElementById('room_price').value) || 0;
    let roomPriceOld = parseFloat(document.getElementById('room_price2').value) || 0;

    let newTotal = roomPrice;

    if (document.getElementById('dateStart').value) {
        const dateInput = document.getElementById('dateStart').value;
        const selectedDate = new Date(dateInput);
        const day = selectedDate.getDate();
        let datex = 30 / parseInt(day);
        newTotal = (parseInt(roomPriceOld) / 30.00) * datex;
    }

    const payTotal = parseInt(totalElec) + parseInt(totalWater) + parseInt(newTotal) + 150;
    
    document.getElementById('pay_total').value = isNaN(payTotal) ? 0 : payTotal;
    document.getElementById('room_price').value = isNaN(parseInt(newTotal)) ? 0 : parseInt(newTotal);
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>