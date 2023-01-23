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
     <h2>ข้อมูลผู้ถือหุ้น</h2>
   </div>


   <h4>โครงสร้างการถือหุ้น</h4>
   <p>รายชื่อผู้ถือหุ้นรายใหญ่ 10 อันดับแรก ที่ปรากฏในสมุดทะเบียนผู้ถือหุ้น ณ วันที่ 31  ธันวาคม  2563 มีดังนี้</p>





   <table class="table-res mb-4 restables-origin">
    <thead >
      <tr>
        <th width="10%">ลำดับ</th>
        <th width="50%">ชื่อ</th>
        <th width="20">จำนวน</th>
        <th width="20">ร้อยละ</th>
      </tr>
    </thead>
    <tbody>

<?php for($i=1;$i<=10;$i++){ ?> 
      <tr>
        <td  data-label="ลำดับ"><?=$i?></td>
        <td class="text-lg-start" data-label="ชื่อ">บริษัท เอเอเอบิบิบิ จำกัด</td>
        <td class="text-lg-start" data-label="จำนวน">20,683,125</td>
        <td class="text-lg-start" data-label="ร้อยละ">2.73</td>
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