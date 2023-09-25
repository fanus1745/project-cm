<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="sb-nav-fixed">
    <?php include 'menu.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"></h1>

                <?php
                    include 'condb.php';
                    $sql = "select sum(activeRoom) activeRoom,
                    sum(inActiveRoom) inActiveRoom,
                    SUM(outRoom) outRoom,
                    SUM(bill) bill,
                    SUM(totalPriceByMonth) as totalPriceByMonth,
                    SUM(repair) repair
                    from (
                    SELECT sum(CASE
                                    WHEN status=1 THEN 1
                                    ELSE 0
                                END) activeRoom,
                            sum(CASE
                                    WHEN status=0 THEN 1
                                    ELSE 0
                                END) inActiveRoom,
                            0 AS outRoom,
                            0 AS bill,
                            0 AS repair,
                            0 as totalPriceByMonth
                    FROM room
                    UNION ALL
                    SELECT 0 AS activeRoom,
                            0 AS inActiveRoom,
                            count(*) AS outRoom,
                            0 AS bill,
                            0 AS repair,
                            0 as totalPriceByMonth
                    FROM out_room
                    UNION ALL
                    SELECT 0 AS activeRoom,
                            0 AS inActiveRoom,
                            0 AS outRoom,
                            count(*) bill,
                            0 AS repair,
                            0 as totalPriceByMonth
                    FROM bill
                    WHERE paybill IS NULL
                    UNION ALL
                    SELECT 0 AS activeRoom,
                            0 AS inActiveRoom,
                            0 AS outRoom,
                            0 bill,
                            0 AS repair,
                            sum(pricetotal) totalPriceByMonth
                    FROM bill
                    WHERE status = 'ชำระเงินแล้ว' and month_bill= month(CURRENT_DATE)
                    UNION ALL
                    SELECT 0 AS activeRoom,
                            0 AS inActiveRoom,
                            0 AS outRoom,
                            0 AS bill,
                            count(*) repair,
                            0 as totalPriceByMonth
                    FROM repair
                    ) as a";
            
                    $result = mysqli_query($conn, $sql);
                    $rowx = mysqli_fetch_array($result);

                    $v1 = $rowx['activeRoom'];
                    $v2 =  $rowx['inActiveRoom'];
                    $v3 =  $rowx['outRoom'];
                    $v4 =  $rowx['bill'];
                    $v5 = $rowx['repair'];
                    $totalPriceByMonth = $rowx['totalPriceByMonth'];
                ?>
                <?php
                    // สร้างคำสั่ง SQL เพื่อดึงข้อมูล
                    $sql = "select COUNT(paid) as count ,paid from (SELECT room.id_room,case when bill.status='ชำระเงินแล้ว' then 1 else 0 end paid FROM `room` left join bill on bill.id_room=room.id_room and MONTH(CURRENT_DATE)=bill.month_bill where room.status =1) as a GROUP BY paid";
                    $result = $conn->query($sql);

                    $data = array();
                    while ($row = $result->fetch_assoc()) {
                        $data[] = $row;
                    }
                ?>
                <?php
                    $labels = array();
                    $dataPoints = array();

                    foreach ($data as $row) {
                        $labels[] = $row['paid'] == 1 ? 'จ่ายค่าห้อง' : 'ไม่จ่ายค่าห้อง';
                        $dataPoints[] = $row['count'];
                    }
                ?>
                <div class="container-fluid px-4">
    <h1 class="mt-4"></h1>

    <div class="row">
        <div class="col-sm-2 col-md-3">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">ห้องที่มีผู้เช่า<h1><?php echo $v1; ?></h1></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="test.php">ดูรายละเอียด</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-3">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">ห้องว่าง<h1><?php echo $v2; ?></h1></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="test.php">ดูรายละเอียด</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-3">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">แจ้งย้ายออก<h1><?php echo $v3; ?></h1></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="showoutroom.php">ดูรายละเอียด</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-3">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">แจ้งซ่อม <h1><?php echo $v5; ?></h1></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="showrepair.php">ดูรายละเอียด</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-3">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">ค่าเช่าที่ยังไม่ได้ชำระ <h1><?php echo $v4; ?></h1></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="bill-list.php">ดูรายละเอียด</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <hr>

                <center><div class="col-xl-6 col-md-12">
                  
                    <div class="card-header">กราฟแสดงการจ่ายค่าค่าเช่าห้องประจำเดือน</div>
                     <div class="card-body">
                     <canvas id="myChart" style="width: 100%; height: 200px;"></canvas>
                    <h5>รายได้ค่าเช่าห้องประจำเดือน:<?php echo $totalPriceByMonth; ?>บาท</h5>
                    <h5></h5>
                    </div>
                    
                </div></center>

                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: <?php echo json_encode($labels); ?>,
                            datasets: [{
                                data: <?php echo json_encode($dataPoints); ?>,
                                backgroundColor: ['rgba(255, 99, 132, 0.6)', 'rgba(54, 162, 235, 0.6)'],
                                borderWidth: 2, // ความหนาของเส้นแบ่ง
                                borderColor: 'rgba(255, 255, 255, 0.7)', // สีของเส้นแบ่ง
                                
                            }],
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                    labels: {
                                        font: {
                                            size: 14,
                                        },
                                    },
                                },

                            },
                        },
                    });
                </script>
            </div>
        </main>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</html>
