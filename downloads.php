<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}


if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  if ($lang == "en") {
    $stmt = $conn->prepare("SELECT * FROM publication_en");
    $stmt->execute();
    $row_publication = $stmt->fetchAll();
  } else {
    $stmt = $conn->prepare("SELECT * FROM publication");
    $stmt->execute();
    $row_publication = $stmt->fetchAll();
  }
} else {
  $stmt = $conn->prepare("SELECT * FROM publication");
  $stmt->execute();
  $row_publication = $stmt->fetchAll();
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
                  echo 'Publication (Prospectus)';
                } else {
                  echo 'เอกสารเผยแพร่ (หนังสือชี้ชวน)';
                }
              } else {
                echo "เอกสารเผยแพร่ (หนังสือชี้ชวน)";
              } ?></h2>
   </div>






   <div class="row">





<?php for($i=0;$i<count($row_publication);$i++){ ?> 

    <div class="col-lg-6">



      <div class="border p-3 mb-4">
        <div class="row align-items-center">
          <div class="col-md-4">
          <img class="img-fluid" src="webpanelcw/upload/upload_publication/<?php echo $row_publication[$i]['img'];?>">
          </div>
          <div class="col-md-8">
            
            <p class="text-secondary"><?php echo $row_publication[$i]['content']; ?></p>
            <a href="<?php echo $row_publication[$i]['link_pdf']; ?>" class="btn btn-warning rounded-0" target="_blank"><span class="material-icons-sharp">vertical_align_bottom</span><?php if (isset($_GET['lang'])) {
                if ($_GET['lang'] == "en") {
                  echo 'Download';
                } else {
                  echo 'ดาวน์โหลด';
                }
              } else {
                echo "ดาวน์โหลด";
              } ?> </a>
          </div>
        </div>
      </div>

    </div>


 <?php } ?>





  </div>

<div aria-label="Page navigation example mt-5">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>



</div>

</section>



</main>


<?php include("footer.php");?>




</body>
</html>