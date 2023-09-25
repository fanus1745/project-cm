<?php
session_start();
include 'condb.php';
$id = $_GET['id'];
$sqlGet = "SELECT * FROM `out_room` where id =$id";

$resultGet = mysqli_query($conn, $sqlGet);
$row = mysqli_fetch_array($resultGet);

$id_room = $row['id_room'];


$sqlDelete = "DELETE FROM `out_room` where id =$id";
mysqli_query($conn, $sqlDelete);

$sqlDeleteMember = "DELETE FROM `member` where id_room =$id_room";
mysqli_query($conn, $sqlDeleteMember);

$sqlDeleteTenent = "DELETE FROM `tenent` where id_room =$id_room";
mysqli_query($conn, $sqlDeleteTenent);

$sqlUpdateRoom = "update room set status =0 where id_room =$id_room";
mysqli_query($conn, $sqlUpdateRoom);

$sqlDeleteBill = "DELETE FROM `bill` where id_room =$id_room";
mysqli_query($conn, $sqlDeleteBill);




echo "<script>alert('ดำเนินการเรียบร้อยแล้ว');</script>";
echo "<script>window.location='showoutroom.php';</script>";
// if (mysqli_query($conn, $sql)) {
//     echo "<script>alert('ดำเนินการเรียบร้อยแบล้ว');</script>";
//     echo "<script>window.location='showrepair.php';</script>";
// } else {
//     echo "Error : " . $sql . "<br>" . mysqli_error($conn);
//     echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
// }
mysqli_close($conn);
