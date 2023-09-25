<?php
include 'condb.php';
$id = $_GET['id'];
$sql = "SELECT bill.*,room.crash,CONCAT(case
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
            end,'-',year_bill) yearMonth FROM `bill` left join room on room.id_room=bill.id_room WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Print</title>
</head>

<body>

    
 
    <div class="row">
        <div class="col-8">
            <h5>ห้างหุ้นส่วนจำกัด เฉลยสุขแมนชั่น</h5>
        </div>
        <div style="text-align: right;" class="col-4">
            <h5>ใบเสร็จรับเงินห้อง:<?php echo $row['id_room'] ?></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h5>ที่อยู่ : 23/31 แขวงหนองบอน เขตประเวศ กรุงเทพฯ 10250</h5>
        </div>
        <div style="text-align: right;" class="col-6">
            <h5>ประจำเดือน <?php echo $row['yearMonth'] ?></h5>

        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h5>เลขประจำตัวผู้เสียภาษีอากร : 3102869889</h5>
        </div>
        <div style="text-align: right;" class="col-6"></div>
    </div>
    <div class="row">
        <div class="col-6">
            <h5>โทร : 089-212-0655</h5>
        </div>
        <div style="text-align: right;" class="col-6">
            <h5>วันที่ออกเอกสาร <?php echo $row['datebill'] ?></h5>
        </div>
    </div>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>

                <th scope="col">รายการ</th>
                <th scope="col">จำนวนเงิน(บาท)</th>

            </tr>
        </thead>
        <tbody>
            <tr>

                <td>ค่าห้องพัก</td>
                <td><?php echo $row['priceroom'] ?></td>

            </tr>
            <tr>

                <td>ค่าบริการส่วนกลาง</td>
                <td>50</td>

            </tr>
            <tr>

                <td>ค่าบริการ(เคเบิลทีวี)</td>
                <td>100</td>

            </tr>
            <tr>

                <td>ค่าน้ำ</td>
                <td><?php echo $row['price_w'] ?></td>

            </tr>
            <tr>

                <td>ค่าไฟ</td>
                <td><?php echo $row['price_e'] ?></td>

            </tr>
            <tr>

                <td>ยอดเงินที่ต้องชำระ</td>
                <td><?php echo $row['pricetotal'] ?></td>

            </tr>
        </tbody>
    </table>
    <br>
    <h4>รวมจำนวนเงินทั้งสิ้น <?php echo $row['pricetotal'] ?> บาท</h4>

    <div id="showbtn" style="text-align: center">
        <button id="printx" onclick="printx()" type="button" class="btn btn-primary">
            Print
        </button>
    </div>

    <script>
        function printx() {
            document.getElementById("showbtn").style.display = "none";

            window.print()
            document.getElementById("showbtn").style.display = "block";

        }
    </script>
            </div>
     
    
    
</body>

</html>