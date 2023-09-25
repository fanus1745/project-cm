<?php
session_start();
include 'condb.php';
$id=$_SESSION["idroom"];

$name=$_POST['firstname'];

$lastname=$_POST['lastname'];

$tel=$_POST['phone'];

$username=$_POST['username'];
$password=$_POST['password'];



// เริ่ม TRANSACTION
mysqli_begin_transaction($conn);

try {
    // อัปเดตตารางแรก
    $sql1 = "UPDATE member SET id_room='".$_SESSION["idroom"]."',name='$name', lastname='$lastname', tel='$tel', username='$username', password='$password' WHERE id_room='$id'";
    $result1 = mysqli_query($conn, $sql1);

    // อัปเดตตารางที่สอง
    $sql2 = "UPDATE tenent SET id_room='".$_SESSION["idroom"]."',name='$name', lastname='$lastname', tel='$tel'WHERE id_room='$id'";
    $result2 = mysqli_query($conn, $sql2);

    // ถ้าทั้งสองการอัปเดตสำเร็จ
    if ($result1 && $result2) {
        // Commit การเปลี่ยนแปลงลงในฐานข้อมูล
        mysqli_commit($conn);
        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
        echo "<script>window.location='profile.php';</script>";
    } else {
        // ถ้าเกิดข้อผิดพลาดในการอัปเดตในอย่างน้อยหนึ่งตาราง
        throw new Exception("ไม่สามารถอัปเดตข้อมูลได้");
    }
} catch (Exception $e) {
    // ถ้าเกิดข้อผิดพลาดในการทำ TRANSACTION ให้ทำ Rollback เพื่อยกเลิกการเปลี่ยนแปลงทั้งหมด
    mysqli_rollback($conn);
    echo "ERROR: " . $e->getMessage();
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}

// ปิดการเชื่อมต่อ
mysqli_close($conn);
?>

