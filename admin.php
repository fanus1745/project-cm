<?php
session_start();
if(!isset($_SESSION["username"]))
header("location:login.php");
include 'navbar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- Bootstrap CSS -->
<link href="bootstarp/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
    <div class="alert alert-primary h4" role="alert">
        welcome to admin
        <br><br>
        <h3>admin</h3>
</div>
<?php
if(isset($_SESSION["firtsname"])){
           echo"<div class='text-success'>";
        echo $_SESSION["firtsname"] . " " . $_SESSION["lastname"];
           echo"</div>";
      }
      include 'test.php';
      ?>
      <br>
<a href="logout.php">Logout</a>
    </div>
</body>
</html>
