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
     <h2>จรรยาบรรและจริยธรรมในการดำเนินธุรกิจ</h2>
   </div>



   <div class="row">


<h4>ความหมายของจริยธรรมและจรรยาบรรณ</h4>

<p>บริษัทฯ มีเจตนารมณ์ในการดำเนินธุรกิจตามหลักการกำกับดูแลกิจการที่ดี โดยยึดมั่นกฎหมาย คุณธรรมจริยธรรม บริหารงานด้วยความโปร่งใส และรับผิดชอบต่อผู้มีส่วนได้เสีย</p>

<p>เพื่อให้การปฏิบัติงานเกี่ยวกับการจัดซื้อและจัดจ้างเป็นไปอย่างเหมาะสม มีประสิทธิภาพ และรักษาภาพพจน์ที่ดีของบริษัทฯ ไว้อย่างต่อเนื่อง จึงกำหนดหลักเกณฑ์อันเกี่ยวกับจรรยาบรรณของการจัดซื้อและจัดจ้าง เพื่อเป็นแนวทางปฏิบัติของทั้งบริษัทฯ ไว้</p>


<p>
จริยธรรม คือ พฤติกรรมที่ใช้เป็นข้อปฏิบัติในการประพฤติที่ดีที่ชอบ โดยมีพื้นฐานมาจากกฎหมาย ศีลธรรม หรือ
จารีตประเพณีวัฒนธรรมของคนในแต่ละสังคม
จรรยาบรรณ คือ หลักความประพฤติปฏิบัติอันเหมาะสม แสดงถึงคุณธรรมและจริยธรรมที่พึงปฏิบัติในการ
ประกอบวิชาชีพ ที่บริษัทคาดหวังให้พนักงานประพฤติปฏิบัติตามเพื่อรักษาชื่อเสียงและส่งเสริมเกียรติของตนเองและบริษัท
</p>


   </div>





 </div>
</section>




</main>

<?php include("footer.php");?>




</body>
</html>