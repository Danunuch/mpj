<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}


if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM company4_en");
    $stmt->execute();
    $row_company4 = $stmt->fetch(PDO::FETCH_ASSOC);
  } else {
    $stmt = $conn->prepare("SELECT * FROM company4");
    $stmt->execute();
    $row_company4 = $stmt->fetch(PDO::FETCH_ASSOC);
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM company4");
  $stmt->execute();
  $row_company4 = $stmt->fetch(PDO::FETCH_ASSOC);
}




if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM blog_company_en");
    $stmt->execute();
    $row_blog_company = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM blog_company");
    $stmt->execute();
    $row_blog_company = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM blog_company");
  $stmt->execute();
  $row_blog_company = $stmt->fetchAll();
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
                  echo 'MPJ Warehouse Company Limited (Warehouse Business)';
                } else {
                  echo 'บริษัท เอ็ม พี เจ คลังสินค้า จำกัด (ธุรกิจคลังสินค้า)';
                }
              } else {
                echo "บริษัท เอ็ม พี เจ คลังสินค้า จำกัด (ธุรกิจคลังสินค้า)";
              } ?></h2>
        </div>






        <img class="img-fluid mb-5" src="webpanelcw/upload/upload_company4/<?php echo $row_company4['img']; ?>">



        <p>
          <?php echo $row_company4['content']; ?>
        </p>











      </div>
    </section>

    <section class="bg-parallax py-5" style="background:url(images/bg-blog01.jpg) no-repeat top center; background-size:cover;">
      <div class="container-xxl">

        <div class="row justify-content-center">



          <div class="col-md-6 col-lg-4 mb-4">




            <div class="warehouse-item">
              <span class="material-icons-outlined">
                area_chart
              </span>
             
             <?php echo $row_company4['content1']; ?>

            </div>


          </div>

          <div class="col-md-6 col-lg-4 mb-4">




            <div class="warehouse-item">
              <span class="material-icons-outlined">
                place
              </span>
             <?php echo $row_company4['content2']; ?>
            </div>

          </div>

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="warehouse-item">
              <span class="material-icons-outlined">
                warehouse
              </span>
             
             <?php echo $row_company4['content3']; ?>

            </div>


          </div>


        </div>


      </div>
    </section>

    <section id="page-section">
      <div class="container-xxl">

        <div class="row warehouse_slick">

            <?php for ($i = 0; $i <count($row_blog_company); $i++) { ?>
              <div class="col-lg-4">

                <div class="warehouse-detail">
                  <img class="img-fluid mb-3" src="webpanelcw/upload/upload_blog/<?php echo $row_blog_company[$i]['img']; ?>">
                  <h4><?php echo $row_blog_company[$i]['topic']; ?></h4>

                  <div class="warehouse-detail-text">
                    <ul>
                      <li><?php echo $row_blog_company[$i]['content']; ?></li>

                    </ul>
                  </div>
                </div>
              </div>
            <?php } ?>
       


        </div>

      </div>
    </section>


  </main>

  <?php include("footer.php"); ?>




</body>

</html>