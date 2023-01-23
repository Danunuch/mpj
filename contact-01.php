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
     <h3 class="text-warning">บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด</h3>
   </div>









   <div class="row align-items-center">

    <div class="col-lg-6">


      <p><i class="icofont-google-map text-warning"></i> 244 หมู่ 5 ตำบลหนองขาม อำเภอศรีราชา จังหวัดชลบุรี 20230</p>
      <p class="mb-0"><i class="icofont-phone text-warning"></i> โทรศัพท์ :  038 060 764</p>
      <p class="mb-0"><i class="icofont-envelope text-warning"></i> อีเมล์ : privacy-policy@mpjlogistics.com</p>


    </div>





    <div class="col-lg-6">
      <div class="ratio ratio-16x9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.702918204573!2d100.96800551527058!3d13.117997115197165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102c81c846e1731%3A0xdea84884ddb43f95!2z4LmA4Lit4LmH4LihIOC4nuC4tSDguYDguIgg4LmC4Lil4LiI4Li04Liq4LiV4Li04LiB4Liq4LmM!5e0!3m2!1sth!2sth!4v1660555699218!5m2!1sth!2sth" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>






  </div>


















  <div class="row mt-5">
    <div class="col-md-6">
      <div class="form-group mb-3">
        <label for="inputName">ชื่อเรื่อง</label>
        <input name="contact[name]" type="text" class="form-control rounded-0" id="inputName" placeholder="กรอกชื่อเรื่อง">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group mb-3">
        <label for="inputName">ชื่อ</label>
        <input name="contact[name]" type="text" class="form-control rounded-0" id="inputName" placeholder="กรอกชื่อ">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group mb-3">
        <label for="inputEmail">อีเมล</label>
        <input name="contact[email]" type="email" class="form-control rounded-0" id="inputEmail" placeholder="กรอกอีเมล">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group mb-3">
        <label for="inputEmail">โทรศัพท์</label>
        <input name="contact[phone]" type="tel" class="form-control rounded-0" id="inputEmail" placeholder="กรอกโทรศัพท์">
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group mb-3">
        <label for="inputName">ข้อความ</label>
        <textarea name="contact[body]" class="form-control rounded-0" rows="8" placeholder="เขียนข้อความของคุณที่นี่" id="textareaMessage"></textarea>
      </div>

    </div>
    <div class="col-md-12 text-center">
      


      <img src="images/Captcha-demo.gif" width="280" height="76" alt="">


      <div class="clearfix mt-3"></div>

      <a href="" class="btn btn btn-dark btn-lg rounded-0 px-lg-5"><i class="icofont-send-mail"></i> ส่งข้อความ</a>
      <a href="" class="btn btn btn-dark btn-lg rounded-0 px-lg-5"><i class="icofont-refresh"></i> ล้างข้อมูล</a>
    </div>
  </div>
















</div>

</section>



</main>


<?php include("footer.php");?>




</body>
</html>