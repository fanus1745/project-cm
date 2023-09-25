<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bill</title>
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
        <div class="h4 alert alert-warning " role="alert">
          คำนวณค่าเช่า

        </div>
        <div class="row">
          <div class="col-md-12">
            <br>

            <form action="https://devbanban.com/?p=4361" method="post">
              <div class="row g-3 align-items-center mb-3">
                <div class="col-sm-2">
                  <label class="col-form-label">เลขห้อง</label>
                </div>
                <div class="col-sm-3">
                  <select name="ref_r_id" class="form-control" required readonly>
                    <option value="1">101</option>
                  </select>
                </div>
              </div>
              <div class="row g-3 align-items-center mb-3">
                <div class="col-sm-2">
                  <label class="col-form-label">วันที่</label>
                </div>
                <div class="col-sm-2">
                  <input type="date" name="datein" class="form-control" required value="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="col-sm-1">
                  <label class="col-form-label">รอบบิล</label>
                </div>
                <div class="col-sm-2">
                  <select name="bill_month" class="form-control" required>
                    <option value="">เลือกรอบบิล</option>
                    <option value="มกราคม 2565">มกราคม </option>
                    <option value="กุมภาพันธ์ 2565">กุมภาพันธ์ </option>
                    <option value="มีนาคม 2565">มีนาคม </option>
                    <option value="เมษายน 2565">เมษายน </option>
                    <option value="พฤษภาคม 2565">พฤษภาคม </option>
                    <option value="มิถุนายน 2565">มิถุนายน </option>
                    <option value="กรกฏาคม 2565">กรกฏาคม </option>
                    <option value="สิงหาคม 2565">สิงหาคม </option>
                    <option value="กันยายน 2565">กันยายน </option>
                    <option value="ตุลาคม 2565">ตุลาคม </option>
                    <option value="พฤศจิกายน 2565">พฤศจิกายน </option>
                    <option value="ธันวาคม 2565">ธันวาคม </option>
                  </select>

                </div>
              </div>
              <div class="row g-3 align-items-center mb-3">
                <div class="col-sm-2">
                  <label class="col-form-label">ค่าเช่า</label>
                </div>
                <div class="col-sm-2">
                  <input type="number" name="bill_room_price" required class="form-control" min="0" value="2000" readonly>
                </div>
                <div class="row g-3 align-items-center mb-3">
                  <div class="col-sm-2">
                    <label class="col-form-label">ค่ามัดจำ</label>
                  </div>
                  <div class="col-sm-2">
                    <input type="number" name="bill_room" required class="form-control" min="0" value="2000" readonly>
                  </div>
                  <div class="row g-3 align-items-center mb-3">
                    <div class="col-sm-2">
                      <label class="col-form-label">ค่าส่วนกลาง</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="number" name="bill" required class="form-control" min="0" value="50" readonly>
                    </div>

                  </div>
                  <div class="row g-3 align-items-center mb-3">
                    <div class="col-sm-2">
                      <label class="col-form-label">ค่าน้ำ</label>
                    </div>

                    <div class="col-sm-2">
                      เลขมิเตอร์ครั้งนี้
                      <input type="number" name="bill_water_now" onkeyup="sum2();" required class="form-control" min="100009">
                    </div>
                    <div class="col-sm-2">
                      ครั้งก่อน
                      <input type="number" name="bill_water_before" required readonly class="form-control" min="0" value="100009">
                    </div>
                    <div class="col-sm-2">
                      หน่วยที่ใช้
                      <input type="text" name="bill_water_meter" required class="form-control" min="0">
                    </div>
                    <div class="col-sm-2">
                      ราคา/หน่วย
                      <input type="number" name="bill_water_rate" required readonly class="form-control" min="0" value="17">
                    </div>
                    <div class="col-sm-2">
                      รวม(บาท)
                      <input type="number" name="bill_water_total" required class="form-control" min="0">
                    </div>
                  </div>
                  <div class="row g-3 align-items-center mb-3">
                    <div class="col-sm-2">
                      <label class="col-form-label">ค่าไฟ</label>
                    </div>

                    <div class="col-sm-2">
                      เลขมิเตอร์ครั้งนี้
                      <input type="number" name="bill_elec_now" required class="form-control" min="100010">
                    </div>
                    <div class="col-sm-2">
                      ครั้งก่อน
                      <input type="number" name="bill_elec_before" required readonly class="form-control" min="0" value="100010">
                    </div>
                    <div class="col-sm-2">
                      หน่วยที่ใช้
                      <input type="number" name="bill_elec_meter" required readonly class="form-control" min="0">
                    </div>
                    <div class="col-sm-2">
                      ราคา/หน่วย
                      <input type="number" name="bill_elec_rate" required readonly class="form-control" min="0" value="9">
                    </div>
                    <div class="col-sm-2">
                      รวม(บาท)
                      <input type="number" name="bill_elec_total" required readonly class="form-control" min="0">
                    </div>
                  </div>

                  <div class="row g-3 align-items-center mb-3">
                    <div class="col-sm-2">
                      <label class="col-form-label">รวมทั้งสิ้น</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="number" name="pay_total" required readonly class="form-control" placeholder="รวมทั้งสิ้น" min="0">
                    </div>
                  </div>
                  <div class="row g-3 align-items-center mb-3">
                    <div class="col-sm-2">
                      <label class="col-form-label"></label>
                    </div>
                    <div class="col-sm-4">
                      <button type="submit" class="btn btn-primary"> บันทึก</button>
                    </div>
                  </div>

            </form>

          </div>
        </div>
      </div>

      <footer>
        <p class="text-center">ฟอร์มฟอร์มคิดค่าเช่า ระบบหอพัก ออกแบบจาก Bootstrap5.2 || devbanban.com 2022</p>
      </footer>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

<!--
//ตัวอย่าง workshop ป้องกันบันทึกข้อมูลซ้ำ https://devbanban.com/?p=4221
//ขอแนะนำระบบพร้อมใช้ ราคาเบาๆ ซื้อแล้วได้ code ทั้งหมด เอาไปต่อยอดได้
//ระบบแจ้งซ่อม https://www.youtube.com/watch?v=bkYBKfFauB8
//ระบบจัดการหอพัก https://www.youtube.com/watch?v=O7Bh0BNCDz8
//ระบบสอบออนไลน์ https://www.youtube.com/watch?v=WOTLFEflkMk&t=125s
-->