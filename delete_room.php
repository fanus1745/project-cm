<?php
include 'condb.php';
$id=$_GET['id'];
$sql="DELETE FROM room WHERE id_room=$id";
if(mysqli_query($conn,$sql)){
    echo"<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='showroom.php';</script>";
}else{
    echo"Error : " . $sql ."<br>" . mysqli_error($conn);
    echo"<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
mysqli_close($conn);
?>