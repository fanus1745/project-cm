<?php
include 'condb.php';

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$id_card = $_POST['id_card'];
$age = $_POST['age'];
$cunty = $_POST['cunty'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$id_room = $_POST['id_room'];
$date_in = $_POST['date_in'];


$sql = "INSERT INTO tenent(id,name,lastname,id_card,age,cunty,address,tel,id_room,date_in )
Values(NULL,'$name','$lastname','$id_card','$age','$cunty','$address','$tel','$id_room','$date_in')";
$result = mysqli_query($conn, $sql);

$sqlUpdateStatus = "update room set status=1 where id_room=" . $id_room;
mysqli_query($conn, $sqlUpdateStatus);

if ($result) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='showroom.php';</script>";
} else {
    echo "ERROR:" . $sql . mysqli_error($conn);
    echo "<script>alert('บันทึกข้อมูลไม่ได้');</script>";
}
mysqli_close($conn);
