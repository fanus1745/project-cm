<?php

include 'condb.php';
$id = $_POST['id'];

echo isset($_POST["submit"]);
// ตรวจสอบว่ามีการส่งไฟล์ที่อัพโหลดมาหรือไม่
if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // ตรวจสอบขนาดของไฟล์
    if ($_FILES["fileToUpload"]["size"] > 50000000) {
        echo "ขออภัย, ไฟล์มีขนาดใหญ่เกินไป.";
        $uploadOk = 0;
    }

    // บันทึกชื่อไฟล์ลงใน MySQL
    if ($uploadOk == 1) {
        $filename = $_FILES["fileToUpload"]["name"];
        // $sql = "INSERT INTO files (filename) VALUES ('$filename')";
        $sql = "UPDATE bill set filename='$filename' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "บันทึกข้อมูลไฟล์ใน MySQL เรียบร้อยแล้ว.";
        } else {
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $conn->error;
        }
    }

    // อัพโหลดไฟล์
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
            echo "<script>window.location='bill-by-user.php';</script>";
        } else {
            echo "เกิดข้อผิดพลาดในการอัพโหลดไฟล์.";
        }
    }
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
