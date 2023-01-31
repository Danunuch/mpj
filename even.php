<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}


if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM activity_en");
    $stmt->execute();
    $row_activity = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM activity");
    $stmt->execute();
    $row_activity = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM activity");
  $stmt->execute();
  $row_activity = $stmt->fetchAll();
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




    <!-- 
 <section id="banner-section" class="bg-parallax" style="background:url(images/banner-section.jpg) no-repeat top center; background-size:cover;">
 </section> -->



    <section id="page-section">
      <div class="container-xxl">

        <div class="text-center mb-5">
          <h2 class="mb-5">
            <?php if (isset($_GET['lang'])) {
              if ($_GET['lang'] == "en") {
                echo 'Social and environmental activities';
              } else {
                echo 'กิจกรรมเพื่อสังคมและสิ่งแวดล้อม';
              }
            } else {
              echo "กิจกรรมเพื่อสังคมและสิ่งแวดล้อม";
            } ?></h2>
        </div>




      <?php for ($i = 0; $i < count($row_activity); $i++) { ?>
          <div class="mb-4">
            <div class="row align-items-center">

              <div class="col-md-6 col-lg-3">
                <a class="item-new" href="news-detail.php">
                  <div class="new-img">
                    <img class="img-fluid w-100" src="webpanelcw/upload/upload_activity/<?php echo $row_activity[$i]['cover_img']; ?>">
                  </div>
                </a>
              </div>
        
                <div class="col-md-6 col-lg-9 p-4">
                  <h4><?php echo $row_activity[$i]['topic']; ?></h4>
                  <p><?php echo $row_activity[$i]['date']; ?></p>
                  <p><?php echo $row_activity[$i]['content']; ?></p>


                  <div class="">
                    <a href="news-detail?activity_id=<?php echo $row_activity[$i]['id']; ?>" class=""><?php if (isset($_GET['lang'])) {
                                                                                                        if ($_GET['lang'] == "en") {
                                                                                                          echo 'Read More >>';
                                                                                                        } else {
                                                                                                          echo 'อ่านทั้งหมด >>';
                                                                                                        }
                                                                                                      } else {
                                                                                                        echo "อ่านทั้งหมด >>";
                                                                                                      } ?></a>
                  </div>

                  <!--  <span>อ่านทั้งหมด >></span> -->

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