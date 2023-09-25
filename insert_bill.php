<?php
include 'condb.php';

$id_room = $_POST['id_room'];
$unitwater = $_POST['bill_water_now'];
$unitelec = $_POST['bill_elec_now'];
$price_w = $_POST['bill_water_total'];
$price_e = $_POST['bill_elec_total'];
$priceroom = $_POST['room_price'];
$pricetotal = $_POST['pay_total'];
$month_bill = $_POST['bill_month'];
$year_bill =  date("Y");
$dateStart = $_POST['dateStart'];




$sql = "INSERT INTO bill(id_room,unitwater,unitelec,price_w,price_e,priceroom,pricetotal,month_bill,year_bill,dateStart)
Values('$id_room','$unitwater','$unitelec','$price_w','$price_e','$priceroom','$pricetotal','$month_bill','$year_bill','$dateStart' )";
$result = mysqli_query($conn, $sql);




$sql2 = "update room set water_no=$unitwater ,electric_no=$unitelec
where id_room='$id_room'";

mysqli_query($conn, $sql2);

if ($result) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='bill-list.php';</script>";
} else {
    echo "ERROR:" . $sql . mysqli_error($conn);
    echo "<script>alert('บันทึกข้อมูลไม่ได้');</script>";
}
mysqli_close($conn);
