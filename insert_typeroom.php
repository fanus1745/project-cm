<?php
include 'condb.php';
$floor = $_POST['floor'];
$nroom = $_POST['nroom'];
$nnr = $_POST['nnr'];
$nprice = $_POST['nprice'];
$nw = $_POST['nw'];
$ne = $_POST['ne'];

$sql = "INSERT INTO room(id_room,floor,type_name,water,elec,crash ) 
Values('$nroom','$floor','$nnr','$nw','$ne','$nprice')";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo"<script>window.location='showroom.php';</script>";

}else{
    echo"ERROR:". $sql . mysqli_error($conn);
    echo"<script>alert('บันทึกข้อมูลไม่ได้');</script>";
}
mysqli_close($conn);


?>

?>




