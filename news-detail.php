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


   <h4>กลุ่มบริษัท เอ็ม พี เจ ได้เล็งเห็นความสำคัญทางด้านการศึกษาของเยาวชนที่จะเติบโตเป็นผู้ใหญ่</h4>


   <p>
    26 มิถุนายน 2561
  </p>

  <p>
    คณะผู้บริหารและพนักงาน กลุ่มบริษัท เอ็ม พี เจ ได้เล็งเห็นความสำคัญทางด้านการศึกษาของเยาวชนที่จะเติบโตเป็นผู้ใหญ่และเป็นกำลัง สำคัญในการพัฒนาศักยภาพของสังคมไทย จึงได้จัดกิจกรรม CSR บริจาคทุนการศึกษา สิ่งของจำเป็นสำหรับเด็ก และเลี้ยงอาหารกลางวัน 
    ณ โรงเรียนวัดหนองขาม ต.หนองขาม อ.ศรีราชา จ.ชลบุรี  
    
  </p>


  <p>โดยมีคณะผู้บริหารและตัวแทนพนักงานบริษัทฯ ไปร่วมกิจกรรม</p>


  <div class="row zoomimg">
   <?php for($i=1;$i<=3;$i++){ ?>

    <div class="col-md-4 col-sm-6 mb-4">
      <div class="view-seventh1">
        <a href="upload/news-detail0<?=$i?>.png" class="b-link-stripe b-animate-go thickbox" title="mpj-logistics">



          <img class="img-fluid" src="upload/news-detail0<?=$i?>.png" alt="mpj-logistics">



        </a>    

      </div>
    </div>
  <?php } ?>
</section>


</main>

<?php include("footer.php");?>




</body>
</html>