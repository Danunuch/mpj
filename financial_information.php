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
     <h2>ข้อมูลทางการเงิน</h2>
   </div>




   <h4 class="text-dark">งบการเงินประจำปี</h4>

   <?php for($i=1;$i<=10;$i++){ ?> 

    <div class="border p-3 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="text-secondary">งบการเงินประจำปี 1/2564</p>
        </div>
        <div class="col-md-6 text-center text-lg-end">
          <a href="upload/pdf.pdf" class="btn btn-warning rounded-0" target="_blank"><span class="material-icons-sharp">vertical_align_bottom</span> อ่านเพิ่มเติม</a>
        </div>
      </div>
    </div>

  <?php } ?>







<div aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>



</div>

</section>



</main>

<?php include("footer.php");?>




</body>
</html>