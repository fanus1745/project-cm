<?php
include 'condb.php';

// $id =  $_GET['id'];
$id = $_POST['id'];

$sql = "UPDATE bill set status='ชำระเงินแล้ว',paybill=cast(now() as date) WHERE id=$id";

echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('ดำเนินการเสร็จสิ้น');</script>";
    echo "<script>window.location='bill-list.php';</script>";
} else {
    echo "ERROR:" . $sql . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถดำเนินการได้');</script>";
}
mysqli_close($conn);
