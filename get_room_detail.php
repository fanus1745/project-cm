<?php
include 'condb.php';
$id = $_GET['id'];


$query = "SELECT * FROM room where id_room =" . $id;

$res = mysqli_query($conn, $query);
$result = mysqli_fetch_array($res, MYSQLI_ASSOC);
echo json_encode($result);
