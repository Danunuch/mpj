<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}


if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM shareholder_en");
    $stmt->execute();
    $row_shareholder = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM shareholder");
    $stmt->execute();
    $row_shareholder = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM shareholder");
  $stmt->execute();
  $row_shareholder = $stmt->fetchAll();
}


if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM sha_content_en");
    $stmt->execute();
    $row_sha_content = $stmt->fetch(PDO::FETCH_ASSOC);
  } else {
    $stmt = $conn->prepare("SELECT * FROM sha_content");
    $stmt->execute();
    $row_sha_content = $stmt->fetch(PDO::FETCH_ASSOC);
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM sha_content");
  $stmt->execute();
  $row_sha_content = $stmt->fetch(PDO::FETCH_ASSOC);
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
     <h2><?php if (isset($_GET['lang'])) {
                if ($_GET['lang'] == "en") {
                  echo 'Shareholder Information';
                } else {
                  echo 'ข้อมูลผู้ถือหุ้น';
                }
              } else {
                echo "ข้อมูลผู้ถือหุ้น";
              } ?></h2>
   </div>


   
   <p><?php echo $row_sha_content['content']; ?></p>





   <table class="table-res mb-4 restables-origin">
    <thead >
      <tr>
        <th width="10%"><?php if (isset($_GET['lang'])) {
                if ($_GET['lang'] == "en") {
                  echo 'No';
                } else {
                  echo 'ลำดับ';
                }
              } else {
                echo "ลำดับ";
              } ?></th>
        <th width="50%"><?php if (isset($_GET['lang'])) {
                if ($_GET['lang'] == "en") {
                  echo 'Name';
                } else {
                  echo 'ชื่อ';
                }
              } else {
                echo "ชื่อ";
              } ?></th>
        <th width="20"><?php if (isset($_GET['lang'])) {
                if ($_GET['lang'] == "en") {
                  echo 'Quantity';
                } else {
                  echo 'จำนวน';
                }
              } else {
                echo "จำนวน";
              } ?></th>
        <th width="20"><?php if (isset($_GET['lang'])) {
                if ($_GET['lang'] == "en") {
                  echo 'Percentage';
                } else {
                  echo 'ร้อยละ';
                }
              } else {
                echo "ร้อยละ";
              } ?></th>
      </tr>
    </thead>
    <tbody>

<?php for($i=0;$i<count($row_shareholder);$i++){ ?> 
      <tr>
        <td  data-label="ลำดับ"><?=$i+1?></td>
        <td class="text-lg-start" data-label="ชื่อ"><?php echo $row_shareholder[$i]['company_name']; ?></td>
        <td class="text-lg-start" data-label="จำนวน"><?php echo $row_shareholder[$i]['qty']; ?></td>
        <td class="text-lg-start" data-label="ร้อยละ"><?php echo $row_shareholder[$i]['percen']; ?></td>
      </tr>
 <?php } ?>
    </tbody>
  </table>


</div>

</section>



</main>
<script src="js/restables.js"></script>
<script>
  $(document).ready(function() {
    $('table').resTables();
  });
</script>

<?php include("footer.php");?>




</body>
</html>