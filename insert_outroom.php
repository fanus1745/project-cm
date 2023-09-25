<?php
include 'condb.php';

$id_room = $_POST['id_room'];
$date_out = $_POST['date_out'];
$detail = $_POST['detail'];



$sql = "INSERT INTO out_room(id,id_room,date_out,detail)
Values(NULL,'$id_room','$date_out','$detail')";
$result = mysqli_query($conn, $sql);



if ($result) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='showoutroom.php';</script>";
} else {
    echo "ERROR:" . $sql . mysqli_error($conn);
    echo "<script>alert('บันทึกข้อมูลไม่ได้');</script>";
}
mysqli_close($conn);
