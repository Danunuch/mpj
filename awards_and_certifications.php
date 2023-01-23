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
     <h2>รางวัลและการรับรอง</h2>
   </div>







   <?php $Awards = array ( 
    '1'=>"ใบรับรอง", 
    '2'=>"รางวัลจากภาครัฐ", 
    '3'=>"รางวัลจากลูกค้า"
  ); ?>


  <?php for($iii=1;$iii<=3;$iii++){ ?> 

    <h4 class="mt-4 text-dark"><?= $Awards[$iii] ?></h4>
    <?php for($ii=1;$ii<=5;$ii++){ ?> 
      <div class="qa-box">
        <a href="javascript:;" class="qa-title"> ISO 9001 : 2015 
          <div class="box-icon">
            <span></span>
            <span></span>
          </div>
        </a>

        <div class="qa-content" style="display: none;">


          <div class="row">
            <?php for($i=1;$i<=3;$i++){ ?> 
              <div class="col-md-6 col-lg-4 mb-4">
                <img class="img-fluid" src="upload/certifications.jpg">
              </div>
            <?php } ?>
          </div>



        </div>
      </div>
    <?php } ?>
  <?php } ?>











</div>
</section>




</main>

<?php include("footer.php");?>




</body>
</html>