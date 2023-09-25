<?php
include 'condb.php';
$id=$_POST['idroom'];
$name=$_POST['firstname'];
$lastname=$_POST['lastname'];
$tel=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql="UPDATE member set id_room='$id',name='$name',lastname='$lastname',tel='$tel',username='$username',password='$password'WHERE id_room='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='userinformation.php';</script>";

}else{
    echo"ERROR:". $sql . mysqli_error($conn);
    echo"<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);

?>