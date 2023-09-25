<?php
include 'condb.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM member WHERE username='$username'and password ='$password'" ;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$status=$row['status'];

if($row>0){
    $_SESSION["username"]=$row['username'];
    $_SESSION["password"]=$row['password'];
    $_SESSION["firtsname"]=$row['name'];
    $_SESSION["lastname"]=$row['lastname'];
    $_SESSION["idroom"]=$row['id_room'];
    if($status == 'U'){
        $show=header("location:index2.php");
    }elseif($status == 'A'){
        $show=header("location:index1.php");
    }
    
}else{
    $_SESSION["Error"]="<p> Your username or password is invalid </p>";
    $show=header("location:login.php");
}
echo $show;


?>