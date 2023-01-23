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
     <h2>บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (กรุงเทพฯ)(ธุรกิจ freight forwarder)</h2>
   </div>











   <?php $Freight = array ( 
    '1'=>"Ocean Freight", 
    '2'=>"Air Freight", 
    '3'=>"Trucking Solution", 
    '4'=>"Customs Clearance Service", 
    '5'=>"Warehouse Services"
  ); ?>

   <?php $Icon_freight = array ( 
    '1'=>"icofont-ship", 
    '2'=>"icofont-airplane-alt", 
    '3'=>"icofont-truck-loaded", 
    '4'=>"icofont-tasks", 
    '5'=>"icofont-home"
  ); ?>

  <div class="row">

    <?php for($i=1;$i<=5;$i++){ ?> 
      <div class="col-6 col-lg text-center">


        <i class="<?= $Icon_freight[$i] ?> h1 text-warning"></i>


        <p class="mt-4"><b class="text-dark"><?= $Freight[$i] ?></b></p>
      </div>
    <?php } ?>

  </div>


  <br>
  <img class="img-fluid mb-5" src="upload/s03.jpg">
  <br>


  <p>
    กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย
  </p>

  <p>
    เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น “ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า”
  </p>




</div>
</section>




</main>

<?php include("footer.php");?>




</body>
</html>