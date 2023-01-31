<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}



if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM catta_cer1_en");
    $stmt->execute();
    $row_catta_cer1 = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM catta_cer1");
    $stmt->execute();
    $row_catta_cer1 = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM catta_cer1");
  $stmt->execute();
  $row_catta_cer1 = $stmt->fetchAll();
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
      'load': function() {

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

  <?php include("header.php"); ?>

  <main>


    <img class="img-fluid w-100" src="upload/bg01.jpg">


    <?php include("navigator.php"); ?>


    <section id="page-section">
      <div class="container-xxl">
        <div class="text-center mb-5">
          <h2><?php if (isset($_GET['lang'])) {
                if ($_GET['lang'] == "en") {
                  echo 'Awards and Certifications';
                } else {
                  echo 'รางวัลและการรับรอง';
                }
              } else {
                echo "รางวัลและการรับรอง";
              } ?></h2>
        </div>



        <h4 class="mt-4 text-dark"><?= $Awards[$iii] ?></h4>
        <?php for ($j = 0; $j < count($row_catta_cer1); $j++) { ?>
          <div class="qa-box">
            <a href="javascript:;" class="qa-title"><?php echo $row_catta_cer1[$j]['cer_name']; ?>
              <div class="box-icon">
                <span></span>
                <span></span>
              </div>
            </a>

            <div class="qa-content" style="display: none;">


              <div class="row">
                <?php

                if (isset($_GET['lang'])) {
                  $lang = $_GET['lang'];
                  if ($lang == "en") {
                    $stmt = $conn->prepare("SELECT * FROM certificate_en WHERE cer_id = :cer_id");
                    $stmt->bindParam(":cer_id", $row_catta_cer1[$j]['cer_id']);
                    $stmt->execute();
                    $row_certificate = $stmt->fetchAll();
                  } else {
                    $stmt = $conn->prepare("SELECT * FROM certificate WHERE cer_id = :cer_id");
                    $stmt->bindParam(":cer_id", $row_catta_cer1[$j]['cer_id']);
                    $stmt->execute();
                    $row_certificate = $stmt->fetchAll();
                  }
                } else {
                  $stmt = $conn->prepare("SELECT * FROM certificate WHERE cer_id = :cer_id");
                  $stmt->bindParam(":cer_id", $row_catta_cer1[$j]['cer_id']);
                  $stmt->execute();
                  $row_certificate = $stmt->fetchAll();
                }

                for ($i = 0; $i < count($row_certificate); $i++) { ?>
                  <div class="col-md-6 col-lg-4 mb-4">
                    <img class="img-fluid" src="webpanelcw/upload/upload_cer/<?php echo $row_certificate[$i]['img']; ?>">
                  </div>
                <?php } ?>
              </div>



            </div>
          </div>
        <?php } ?>











      </div>
    </section>




  </main>

  <?php include("footer.php"); ?>




</body>

</html>