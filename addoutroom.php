<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>แจ้งย้ายออก</title>
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
                                <center>แจ้งย้ายออก
                            </h4>
                            </center>
                        </div><br>
                        <form name="form1" method="post" action="insert_outroom.php">
                            <label>วันที่ย้ายออก</label>
                            <font style="float:right"size="5" color="#FF0000">*</font>
                            <input type="date" name="date_out" class="form-control" value="<?php echo date('Y-m-d'); ?>"><br>
                            <label>เลือกห้อง</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>

                            <?php

                            include 'condb.php';

                            $sql = "SELECT id_room FROM room where status=1";
                            $result = $conn->query($sql);


                            if ($result->num_rows > 0) {
                                echo "<select class='form-control' name='id_room'>";
                                while ($row = $result->fetch_assoc()) {
                                    $optionId = $row['id_room'];
                                    $optionName = $row['id_room'];
                                    echo "<option value='$optionId'>$optionName</option>";
                                }
                                echo "</select>";
                            } else {
                                echo "No options found.";
                            }

                            ?>


                            <!-- <input type="text" name="id_room" class="form-control" required placeholder="เลือกห้อง"> -->
                            <br>
                            <label>รายละเอียดเพิ่มเติม</label>
                            <font style="float:right"size="5" color="#FF0000">*</font><br>
                            <input type="text" name="detail" class="form-control" value="-" required placeholder="รายละเอียดเพิ่มเติม"><br>


                            <button type="summit" class="btn btn-success">บันทึก</button>
                            <a href="showoutroom.php" class="btn btn-secondary ">ย้อนกลับ</a><br>

                        </form>
                    </div>
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