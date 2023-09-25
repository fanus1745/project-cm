<?php
include 'condb.php';

$id = $_POST['id'];
$id_room = $_POST['id_room'];
$crash = $_POST['crash'];
$detail = $_POST['detail'];
$status = $_POST['status'];

$sql = "UPDATE repair set id_room='$id_room',crash='$crash',detail='$detail',status='$status' WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='showrepair.php';</script>";
} else {
    echo "ERROR:" . $sql . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);
