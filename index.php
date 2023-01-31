<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}



if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM content_en");
    $stmt->execute();
    $row_content = $stmt->fetch(PDO::FETCH_ASSOC);
  } else {
    $stmt = $conn->prepare("SELECT * FROM content");
    $stmt->execute();
    $row_content = $stmt->fetch(PDO::FETCH_ASSOC);
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM content");
  $stmt->execute();
  $row_content = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM company_en");
    $stmt->execute();
    $row_company = $stmt->fetchAll();
  } else if ($lang == "th") {
    $stmt = $conn->prepare("SELECT * FROM company");
    $stmt->execute();
    $row_company = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM company");
  $stmt->execute();
  $row_company = $stmt->fetchAll();
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

    <?php include("slide.php"); ?>




    <section id="page-section" class="bg-parallax" style="background:url(images/bg01.jpg) no-repeat top center; background-size:cover;">

      <div class="container-xxl">


        <div class="text-center mb-5">

          <h5><?php echo $row_content['content'] ?> </h5>
        </div>




        <div class="text-center mt-5">
          <a href="about?<?php if (isset($_GET['lang'])) {
                            if ($_GET['lang'] == "en") {
                              echo 'lang=en';
                            } else {
                              echo 'lang=th';
                            }
                          } else {
                            echo "";
                          } ?>" class="btn btn-dark btn-lg px-5 "><?php if (isset($_GET['lang'])) {
                                                                    if ($_GET['lang'] == "en") {
                                                                      echo 'Read All';
                                                                    } else {
                                                                      echo 'อ่านทั้งหมด';
                                                                    }
                                                                  } else {
                                                                    echo "อ่านทั้งหมด";
                                                                  } ?></a>
        </div>

      </div>

    </section>


    <section id="service-section">

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 bg-service01">

          </div>
          <div class="col-lg-6 bg-service02">

            <div class="py-5 px-lg-5">
              <h2 class="img-fluid mb-5"><?php if (isset($_GET['lang'])) {
                                            if ($_GET['lang'] == "en") {
                                              echo 'Affiliated Companies';
                                            } else {
                                              echo 'กลุ่มบริษัทในเครือ';
                                            }
                                          } else {
                                            echo "กลุ่มบริษัทในเครือ";
                                          } ?></h2>




              <div class="box-service">

                <?php for ($i = 0; $i < count($row_company); $i++) { ?>
                  <a class="item-service" href="<?php if ($row_company[$i]['id'] == 1) {
                                                  echo "mpj_logistics";
                                                } else if ($row_company[$i]['id'] == 2) {
                                                  echo "container_yard";
                                                } else if ($row_company[$i]['id'] == 3) {
                                                  echo "freight_forwarder";
                                                } else if ($row_company[$i]['id'] == 4) {
                                                  echo "mpj_warehouse";
                                                } ?>?<?php if (isset($_GET['lang'])) {
                                                        if ($_GET['lang'] == "en") {
                                                          echo 'lang=en';
                                                        } else {
                                                          echo 'lang=th';
                                                        }
                                                      } else {
                                                        echo "";
                                                      } ?>">
                    <div class="img-service">
                      <img src="upload/service05.png">
                    </div>
                    <div class="text-service">
                      <h4> <?php
                            echo $row_company[$i]['company_name'];
                            ?></h4>
                    </div>
                  </a>
                <?php } ?>



              </div>
            </div>


          </div>
        </div>
      </div>

    </section>



    <section id="new-section" class="bg-parallax" style="background:url(images/bg-blog01.jpg) no-repeat top center; background-size:cover;">

      <div class="container-xxl">

        <div class="text-center">
          <h2 class="mb-5"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo 'Activity';
                              } else {
                                echo 'กิจกรรม';
                              }
                            } else {
                              echo "กิจกรรม";
                            } ?></h2>
        </div>



        <?php for ($i = 0; $i < count($row_activity); $i++) { ?>

          <div class="bg-white mb-4">
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
                  <a href="news-detail?activity_id=<?php echo $row_activity[$i]['id']; ?>&<?php if (isset($_GET['lang'])) {
                                                                                            if ($_GET['lang'] == "en") {
                                                                                              echo 'lang=en';
                                                                                            } else {
                                                                                              echo 'lang=th';
                                                                                            }
                                                                                          } else {
                                                                                            echo "";
                                                                                          } ?>" class=""><?php if (isset($_GET['lang'])) {
                                                                  if ($_GET['lang'] == "en") {
                                                                    echo 'Read all >>';
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



        <div class="text-end">
          <a href="even?<?php if (isset($_GET['lang'])) {
                          if ($_GET['lang'] == "en") {
                            echo 'lang=en';
                          } else {
                            echo 'lang=th';
                          }
                        } else {
                          echo "";
                        } ?>" class="btn btn-warning rounded-pill"><?php if (isset($_GET['lang'])) {
                                                                      if ($_GET['lang'] == "en") {
                                                                        echo 'view all >>';
                                                                      } else {
                                                                        echo 'ดูทั้งหมด >>';
                                                                      }
                                                                    } else {
                                                                      echo "ดูทั้งหมด >>";
                                                                    } ?></a>
        </div>








      </div>





      </div>

    </section>










  </main>



  <?php include("footer.php"); ?>




</body>

</html>