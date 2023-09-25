<?php
include 'condb.php';
$id = $_POST['nroom'];
$price = $_POST['nprice'];
$water = $_POST['nw'];
$elec = $_POST['ne'];

$sql = "UPDATE room set id_room='$id',crash='$price',water='$water',elec='$elec' WHERE id_room='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='showroom.php';</script>";
} else {
    echo "ERROR:" . $sql . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);
