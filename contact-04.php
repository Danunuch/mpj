<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}


if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM contact_04_en");
    $stmt->execute();
    $row_contact_04 = $stmt->fetch(PDO::FETCH_ASSOC);
  } else {
    $stmt = $conn->prepare("SELECT * FROM contact_04");
    $stmt->execute();
    $row_contact_04 = $stmt->fetch(PDO::FETCH_ASSOC);
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM contact_04");
  $stmt->execute();
  $row_contact_04 = $stmt->fetch(PDO::FETCH_ASSOC);
}


?>


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
     <h3 class="text-warning"><?php echo $row_contact_04['company_name']; ?></h3>
   </div>









   <div class="row align-items-center">

    <div class="col-lg-6">


    <p><i class="icofont-google-map text-warning"></i> <?php echo $row_contact_04['address']; ?></p>
      <p class="mb-0"><i class="icofont-phone text-warning"></i> <?php if (isset($_GET['lang'])) {
                if ($_GET['lang'] == "en") {
                  echo 'Tel : ';
                } else {
                  echo '???????????????????????? : ';
                }
              } else {
                echo "???????????????????????? : ";
              } ?> <?php echo $row_contact_04['tel1']; ?></p>
      <p class="mb-0"><i class="icofont-envelope text-warning"></i> <?php if (isset($_GET['lang'])) {
                if ($_GET['lang'] == "en") {
                  echo 'Email : ';
                } else {
                  echo '??????????????? :';
                }
              } else {
                echo "??????????????? :";
              } ?> <?php echo $row_contact_04['email']; ?></p>


    </div>





    <div class="col-lg-6">
      <div class="ratio ratio-16x9">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62171.24801003127!2d100.9001563582031!3d13.1179919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102c81c846e1731%3A0xdea84884ddb43f95!2z4LmA4Lit4LmH4LihIOC4nuC4tSDguYDguIgg4LmC4Lil4LiI4Li04Liq4LiV4Li04LiB4Liq4LmM!5e0!3m2!1sth!2sth!4v1675144090361!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>






  </div>





  <form method="POST" action="sendmail04.php">
          <div class="row mt-5">
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="inputName">??????????????????????????????</label>
                <input name="title" type="text" class="form-control rounded-0" id="inputName" placeholder="??????????????????????????????????????????">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="inputName">????????????</label>
                <input name="fullname" type="text" class="form-control rounded-0" id="inputName" placeholder="????????????????????????">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="inputEmail">???????????????</label>
                <input name="email" type="email" class="form-control rounded-0" id="inputEmail" placeholder="???????????????????????????">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="inputEmail">????????????????????????</label>
                <input name="phone" type="tel" class="form-control rounded-0" id="inputEmail" placeholder="????????????????????????????????????">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="inputName">?????????????????????</label>
                <textarea name="message" class="form-control rounded-0" rows="8" placeholder="????????????????????????????????????????????????????????????????????????" id="textareaMessage"></textarea>
              </div>

            </div>
            <div class="col-md-12 text-center">



             <div class="g-recaptcha" data-sitekey="6LcqsUEkAAAAANlj03__XSnP0LfPDHL_056Boo0Y" style="display: flex;justify-content: center;"></div>


              <div class="clearfix mt-3"></div>

              <button type="submit" name='sentmail04' class="btn btn btn-dark btn-lg rounded-0 px-lg-5"><i class="icofont-send-mail"></i> ??????????????????????????????</button>
              <a href="" class="btn btn btn-dark btn-lg rounded-0 px-lg-5"><i class="icofont-refresh"></i> ??????????????????????????????</a>
            </div>
          </div>
        </form>















</div>

</section>



</main>


<?php include("footer.php");?>

 <script src="https://www.google.com/recaptcha/api.js" async defer></script>



</body>
</html>