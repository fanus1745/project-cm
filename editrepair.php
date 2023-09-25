<?php
include 'condb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM repair WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>แจ้งซ่อม</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="bootstarp/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    <?php include 'menu.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-md">
                <br>
                <div class="row">
                    <div class="col-md">
                        <div class="" role="alert">
                            <h4>
                                <center>แจ้งซ่อม
                            </h4>
                            </center>
                        </div><br>
                        <form name="form1" method="post" action="update_repair.php">

                            <input hidden id="xIdRoom" value="<?= isset($row['id_room']) ? $row['id_room'] : '' ?>">
                            <input hidden id="xStatus" value="<?= isset($row['status']) ? $row['status'] : '' ?>">
                            <input hidden id="id" name="id" value="<?= $id  ?>">

                            <label>เลือกห้อง</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>

                            <?php
                            include 'condb.php';
                            $sql_room = "SELECT id_room FROM room where status=1";
                            $result_room = $conn->query($sql_room);

                            if ($result_room->num_rows > 0) {
                                echo "<select " . "class='form-control' name='id_room' id='id_room'>";
                                while ($row_room = $result_room->fetch_assoc()) {
                                    $optionId = $row_room['id_room'];
                                    $optionName = $row_room['id_room'];
                                    echo "<option value='$optionId'>$optionName</option>";
                                }
                                echo "</select>";
                            } else {
                                echo "No options found.";
                            }
                            ?>

                            <br>
                            <label>รายการซ่อม</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input type="text" name="crash" class="form-control" value="<?= isset($row['crash']) ? $row['crash'] : '' ?>" required placeholder="รายการซ่อม">
                            <br>
                            <label>รายละเอียดเพิ่มเติม</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input type="text" name="detail" class="form-control" value="<?= isset($row['detail']) ? $row['detail'] : '' ?>" required placeholder="รายละเอียดเพิ่มเติม">
                            <br>
                            <label>สถานะ</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <select class="form-control" name="status" id="status">
                                <option value='แจ้งซ่อม'>แจ้งซ่อม</option>
                                <option value='กำลังดำเนินการซ่อม'>กำลังดำเนินการซ่อม</option>
                                <option value='เรียบร้อยแล้ว'>เรียบร้อยแล้ว</option>
                                <option value='ยกเลิก'>ยกเลิก</option>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-success">บันทึก</button>
                            <a href="showrepair.php" class="btn btn-secondary ">ย้อนกลับ</a><br>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script>
    document.getElementById('id_room').value = document.getElementById('xIdRoom').value
    document.getElementById('status').value = document.getElementById('xStatus').value
</script>
