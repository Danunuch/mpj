<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}


if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM history_en");
    $stmt->execute();
    $row_history = $stmt->fetch(PDO::FETCH_ASSOC);
  } else {
    $stmt = $conn->prepare("SELECT * FROM history");
    $stmt->execute();
    $row_history = $stmt->fetch(PDO::FETCH_ASSOC);
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM history");
  $stmt->execute();
  $row_history = $stmt->fetch(PDO::FETCH_ASSOC);
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
                  echo 'History';
                } else {
                  echo 'ประวัติความเป็นมา';
                }
              } else {
                echo "ประวัติความเป็นมา";
              } ?></h2>
        </div>



        <div class="about">

          <p>
            <?php echo $row_history['content']; ?>

          </p>



        </div>


        <div class="text-center mb-4">


          <img class="img-fluid" src="webpanelcw/upload/upload_history/<?php echo $row_history['img'];?>">

        </div>

        <!--  <div class="text-center mb-4">

     <img class="img-fluid" src="upload/about01.jpg">

   </div>
 -->


      </div>
    </section>




  </main>

  <?php include("footer.php"); ?>




</body>

</html>