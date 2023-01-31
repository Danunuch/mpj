<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}




if (isset($_GET['activity_id'])) {
  $activity = $_GET['activity_id'];

  $stmt_img = $conn->prepare("SELECT * FROM activity_img WHERE activity_id = :id");
  $stmt_img->bindParam(":id", $activity);
  $stmt_img->execute();
  $row_activity_img = $stmt_img->fetchAll();




  if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if ($lang == "en") {
      $stmt = $conn->prepare("SELECT * FROM activity_en WHERE id = :id");
      $stmt->bindParam(":id", $activity);
      $stmt->execute();
      $row_activity = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
      $stmt = $conn->prepare("SELECT * FROM activity WHERE id = :id");
      $stmt->bindParam(":id", $activity);
      $stmt->execute();
      $row_activity = $stmt->fetch(PDO::FETCH_ASSOC);
    }
  } else {
    $stmt = $conn->prepare("SELECT * FROM activity WHERE id = :id");
    $stmt->bindParam(":id", $activity);
    $stmt->execute();
    $row_activity = $stmt->fetch(PDO::FETCH_ASSOC);
  }
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


        <h4><?php
            echo $row_activity['topic'];
            ?></h4>


        <p>
          <?php
          echo $row_activity['date'];
          ?>
        </p>

        <p>
          <?php
          echo $row_activity['content'];
          ?>

        </p>




        <div class="row zoomimg">
          <?php for ($i = 0; $i < count($row_activity_img); $i++) { ?>

            <div class="col-md-4 col-sm-6 mb-4">
              <div class="view-seventh1">
                <a href="webpanelcw/upload/upload_activity/<?php
                                                            echo $row_activity_img[$i]['image'];
                                                            ?>" class="b-link-stripe b-animate-go thickbox" title="mpj-logistics">



                  <img class="img-fluid" src="webpanelcw/upload/upload_activity/<?php
                                                                                echo $row_activity_img[$i]['image'];
                                                                                ?>" alt="mpj-logistics">



                </a>

              </div>
            </div>
          <?php } ?>
    </section>


  </main>

  <?php include("footer.php"); ?>




</body>

</html>