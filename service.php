<!DOCTYPE html>
<html lang="en" class="desktop">
<head>

  <link rel="shortcut icon" href="images/favicon.ico">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=0.85">
  <meta name="description" content="mpj-logistics">
  <meta name="keyword" content="mpj-logistics">
  <meta name="author" content="mpj-logistics">
  <link rel="shortcut icon" href="images/logo.svg" type="image/png">
  <title>mpj-logistics</title>




  <link href="css/spinner.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  
  <script src="js/core.min.js"></script>
  <script src="js/script.min.js"></script>

  <script src="js/jquery.min.js"></script>

  <script type="text/javascript">

    'use strict'; 
    var $window = $(window); 
    $window.on({
      'load': function () {

        /* Preloader */ 
        $('.spinner').fadeOut(2500);
      },
      
    });

  </script>

  
</head>

<body>
 <!-- Pre loader -->
 <div class="spinner" id="loading-body">
  <div> 
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>

<?php include("header.php");?>

<main>


  <img class="img-fluid w-100" src="upload/bg01.jpg">


  <?php include("navigator.php");?>



  <section id="page-section">
    <div class="container-xxl">
      <div class="text-center mb-5">
        <h2>บริการ</h2>
      </div>


      <h4>mpj-logistics</h4>

      <div class="about">

        <p>
         กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร
         การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับsซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า12 ปี
         โดยเรามุ่งมั่นที่จะเป็น “ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่น
         ภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า”      
       </p>

     </div>

     <div class="row">
      <div class="col-lg-12">

        <?php $service_mes = array ( 

          '1'=>"บริการด้านขนส่ง",
          '2'=>"บริการลานฝากตู้คอนเทนเนอร์",
          '3'=>"บริการ freight forwarder",
          '4'=>"บริการให้เช่าคลังสินค้า");
          ?>

          <div class="row align-items-center">
            <?php for($i=1;$i<=4;$i++){ ?>


              <div class="col-md-6 col-lg-3 ">
                <a class="service-item" href="service-detail.php"id="service_mes">
                 <div class="service-img">
                  <img class="img-fluid " src="images/icon0<?=$i?>.png">
                </div>
                <div class="service-text">
                  <h4><?= $service_mes[$i] ?></h4>
                </div>
              </a>
            </div>

          <?php } ?>

        </div>




      </div>
    </section>




  </main>

  <?php include("footer.php");?>




</body>
</html>