<?php
include 'condb.php';
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];


$sql="UPDATE rate set id='$id',name='$name',price='$price'WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='rate.php';</script>";

}else{
    echo"ERROR:". $sql . mysqli_error($conn);
    echo"<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);
