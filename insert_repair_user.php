<?php
include 'condb.php';

$id_room = $_POST['id_room'];
$crash = $_POST['crash'];
$detail = $_POST['detail'];
$status = $_POST['status'];



$sql = "INSERT INTO repair(id,id_room,crash,detail,status)
Values(NULL,'$id_room','$crash','$detail','$status')";
$result = mysqli_query($conn, $sql);



if ($result) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='repair.php';</script>";
} else {
    echo "ERROR:" . $sql . mysqli_error($conn);
    echo "<script>alert('บันทึกข้อมูลไม่ได้');</script>";
}
mysqli_close($conn);
