<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - tenent</title>
 
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="css1/bootstrap.min.css" rel="stylesheet">

        <link href="css1/bootstrap-icons.css" rel="stylesheet">

        <link href="css1/owl.carousel.min.css" rel="stylesheet">

        <link href="css1/tooplate-moso-interior.css" rel="stylesheet">
  
  
 
</head>
<body style="background-color: #ffffff;">
  <?php include 'menu2.php'; ?>
  <div id="layoutSidenav_content">
  <main>  
  
<header class="site-header d-flex justify-content-center align-items-center">
<div class="container">
        <div class="row">
            
            <div class="col-lg-6">
                
            </div>
            <div class="col-lg-6 d-flex align-items-center ">
    <div class="hero-section-text text-center">
    <h4 class="text-light">ยินดีต้อนรับ:
    <?php
    if (isset($_SESSION["firtsname"])) {
       
        echo "คุณ" . " " . $_SESSION["firtsname"] . " " . $_SESSION["lastname"];
        echo "</center>";
        
    }
    ?></h4>
      <h4 class="text-warning">หมายเลขห้อง
                  <?php
    if (isset($_SESSION["firtsname"])) {
       
        echo $_SESSION["idroom"] ;
       
    }

    ?></h4>

                
            </div>

    </div>
</div>

        </div>
    </div>

           

       
</header>

<br>
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-5 col-12">
       <center> <h6 class="mt-2 mb-4" style="color-black;">- รายละเอียดภายใน
                    <?php
                        if (isset($_SESSION["firtsname"])) {
                            echo "ห้อง" . " " . $_SESSION["idroom"];
                        }
                    ?> -
                </h6></center>
            <div style="background-color: #36363e; padding: 20px; border-radius: 10px;">
                
                <p style="color: #D2B48C;">*ค่าเช่าห้อง 2,000 บาท/เดือน</p>
                <p style="color: #D2B48C;">*ค่าน้ำ 17 บาท/หน่วย และค่าไฟ 9 บาท/หน่วย</p>
                <p style="color: #D2B48C;">*ประเภทห้องเป็นพัดลม</p>
                <p style="color: #D2B48C;">*ภายในห้องมีห้องน้ำและระเบียงในตัว</p>
                <p style="color: #D2B48C;">*เฟอร์นิเจอร์ภายในห้องมีพัดลม ตู้เสื้อผ้า เตียงนอน</p>
                <p style="color: #D2B48C;">*มีที่จอดรถยนต์และมอเตอร์ไซค์ 1 คัน/ห้อง</p>
            </div>
        </div>
    



  
              

<div class="col-lg-12 col-12">
                            <br>

                            <h2 class="mb-4">ติดต่อเรา</h2>
                        </div>

                       
                        <div class="col-lg-10 col-20 mt-5 mt-lg-0">
                            <div class="custom-block">

                                <h3 class="text-white mb-2">ที่ตั้ง</h3>

                                <p class="text-white mb-2">
                                   

                                  -  23/31 ซ.เฉลยสุข ประเวศ หนองบอน กรุงเทพฯ 10250
                                </p>

                                <h3 class="text-white mt-3 mb-2">ติดต่อ/สอบถาม</h3>

                                <div class="d-flex flex-wrap">
                                    <p class="text-white mb-2 me-4">

                                        <a href="tel: 089-212-0655" class="text-white">
                                        - 089-212-0655 หรือ แอดไลน์
                                        </a><br>
                                    

                                   
                                        <center><img src="img/line1.png"  alt="" width="120" height="120"></a>
                                
                                    </p></center>
                                </div>

                                <iframe class="google-map mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15505.996875843948!2d100.6430213776445!3d13.68818704125423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6074b8c9cc35%3A0xc9d9b9d50158514a!2sC.%20M.%20Apartment!5e0!3m2!1sen!2sth!4v1689055100481!5m2!1sen!2sth" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
           

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36363e" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>            
        </main>

        <footer class="site-footer">
            

                    
                        <?php include "footer.php"?>
                    

               
        </footer>
        
  </main>

  </div>


</body>

</html>
 <!-- JAVASCRIPT FILES -->
 <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>