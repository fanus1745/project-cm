<?php
include 'condb.php';
//query
$query = "SELECT * FROM room WHERE id_room=$_GET[id]";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
//print_r($row);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>ADD</title>
  <style type="text/css">
    .devbanban {
      background-color: #ffffff;
    }
  </style>
</head>

<body style="background-color: #fffff;">
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-md-2"></div>
      <!--<div class="col col-sm col-md devbanban" style="margin-top: 50px;">-->
      <br>
      <!--<h4 align="center" style="color: red;">แสดงรายชื่อห้อง</h4>-->
      <br>
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="alert alert-warning" role="alert">
            <center>
              <font color="red"> <b> บันทึกการเช่าอยู่</b></font>
            </center>
          </div>
          <hr>
          <div style="margin-left: 20px;">
            <form action="insert_tenent.php" method="post">

              <!--<label class="col-sm-2 ">หมายเลขห้อง</label>
                  
                        <input type="text" name="idroom" class="form-control" readonly value="<?php echo $row['id_room']; ?>">-->



              <label class="col-sm-2 ">ชื่อ</label>

              <input type="text" name="fname" class="form-control" required placeholder="ชื่อผู้เช่า">



              <label class="col-sm-2 ">นามสกุล</label>

              <input type="text" name="lname" class="form-control" required placeholder="นามสกุลผู้เช่า">



              <label class="col-sm-2 ">เบอร์โทร</label>

              <input type="text" name="phone" class="form-control" required placeholder="เบอร์โทร" minlength="10" maxlength="10">



              <label class="col-sm-2 ">เลขบัตรประชาชน</label>

              <input type="text" name="idcard" class="form-control" required placeholder="เลขบัตรประชาชน" maxlength="13">



              <label class="col-sm-2 ">วันที่เข้าอยู่</label>

              <input type="date" name="datein" class="form-control" value="<?php echo date('Y-m-d'); ?>">

              <!-- <label class="col-sm-1 ">เวลา</label>
                      <div class="col-sm-3">
                        <input type="time" name="booking_time" class="form-control" required placeholder="เวลา">
                      </div>-->


              <!--<div class="form-group row">
                      <label class="col-sm-2 ">ผู้บันทึก</label>
                      <div class="col-sm-3">
                        <input type="text" name="booking_staff" class="form-control" readonly value="พนง.">
                      </div>
                    </div>-->
              <div class="form-group row">
                <label class="col-sm-2 "></label>
                <div class="col-sm-10">
                  <button type="summit" class="btn btn-success">SAVE</button>
                  <input type="reset" name="cancle" value="CANCEL" class="btn btn-danger">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <hr>
  <!-- <center> <font color="white"> designed by devbanban.com  สนับสนุนได้ที่ <a href="https://devbanban.com/?page_id=2309" target="_blank"> คลิก </a></font></center>-->
</body>

</html>