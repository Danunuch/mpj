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
      <h2>วิสัยทัศน์ พันธกิจ และค่านิยม</h2>
    </div>


    <h4>วิสัยทัศน์</h4>



      <p>
        MPJ Group has been established since 2008 to be a one stop Logistics Service Provider. We provide container maintenance & repair services along with container transportation business which has been growing continuously  since established.
        In terms of depot business, we increase our work efficiency by  adding up new equipment and technologies to support customer’s requirements in order to achieve their satisfaction with qualified services.
        With trust from customers, we have become one of the fastest growing depot and 
      </p>




 
    <h4>พันธกิจ</h4>



      <p>
        MPJ Group has been established since 2008 to be a one stop Logistics Service Provider. We provide container maintenance & repair services along with container transportation business which has been growing continuously  since established.
        In terms of depot business, we increase our work efficiency by  adding up new equipment and technologies to support customer’s requirements in order to achieve their satisfaction with qualified services.
        With trust from customers, we have become one of the fastest growing depot and 
      </p>


    <h4>ค่านิยม</h4>



      <p>
        MPJ Group has been established since 2008 to be a one stop Logistics Service Provider. We provide container maintenance & repair services along with container transportation business which has been growing continuously  since established.
        In terms of depot business, we increase our work efficiency by  adding up new equipment and technologies to support customer’s requirements in order to achieve their satisfaction with qualified services.
        With trust from customers, we have become one of the fastest growing depot and 
      </p>




 



</div>
</section>




</main>

<?php include("footer.php");?>




</body>
</html>