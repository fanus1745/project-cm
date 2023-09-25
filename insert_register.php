<?php
include 'condb.php';
//รับค่าตัวแปรจากไฟล์ register



$name = $_POST['name'];
$lastname = $_POST['lastname'];
$tel = $_POST['tel'];
$username = $_POST['username'];
$password = $_POST['password'];

//เข้ารหัส password ด้วย sha512
//$password=hash('sha512',$password);

$sqlCheck = "select id_room 
from tenent where name ='$name' and lastname ='$lastname' and tel ='$tel'";

$resultCheck = mysqli_query($conn, $sqlCheck);
$row = mysqli_fetch_array($resultCheck);

$id_room = $row['id_room'];

if ($id_room) {
    //คำสั่งเพิ่มข้อมูลตาราง member
    $sql = "INSERT INTO member(id_room,name,lastname,tel,username,password,status) 
Values('$id_room','$name','$lastname','$tel','$username','$password','U')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='login.php';</script>";
    } else {
        echo "ERROR:" . $sql . mysqli_error($conn);
        echo "<script>alert('บันทึกข้อมูลไม่ได้');</script>";
    }
} else {
    echo "<script>alert('ไม่พบข้อมูลของคุณในระบบโปรดติดต่อ Admin');</script>";
    echo "<script>window.location='register.php';</script>";
}


mysqli_close($conn);
