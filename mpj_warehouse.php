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
     <h2>บริษัท เอ็ม พี เจ คลังสินค้า จำกัด (ธุรกิจคลังสินค้า)</h2>
   </div>






   <img class="img-fluid mb-5" src="upload/Warehouse01.jpg">



   <p>    
    กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย
  </p>


  <p>
    เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี โดยเรามุ่งมั่นที่จะเป็น “ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่นภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า”
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
          <h4>พื้นที่คลังสินค้าทั้งหมด</h4>
          <p><span>86,000</span> ตร.ม.</p>

        </div>


      </div>

      <div class="col-md-6 col-lg-4 mb-4">




        <div class="warehouse-item">
          <span class="material-icons-outlined">
            place
          </span>
          <h4>คลังสินค้า</h4>
          <p><span>8</span> แห่ง</p>

        </div>

      </div>

      <div class="col-md-6 col-lg-4 mb-4">

        <div class="warehouse-item">
          <span class="material-icons-outlined">
            warehouse
          </span>
          <h4>ความจุในการจัดเก็บ</h4>
          <p><span>60,000</span> +พาเลทต่อปี</p>

        </div>


      </div>


    </div>








  </div>
</section>

<section id="page-section">
  <div class="container-xxl">

    <div class="row warehouse_slick">

      <?php for($ii=1;$ii<=3;$ii++){ ?> 
       <?php for($i=2;$i<=4;$i++){ ?> 
        <div class="col-lg-4">

          <div class="warehouse-detail">
            <img class="img-fluid mb-3" src="upload/Warehouse0<?=$i?>.jpg">
            <h4>ชลบุรี</h4>

            <div class="warehouse-detail-text">
              <ul>
                <li>ชิ้นส่วนยานยนต์ ชิ้นส่วนอิเลคทรอนิคส์ และวัตถุดิบในกลุ่มอุตสาหกรรมอื่นๆ เช่น เคมีภัณฑ์, เม็ดพลาสติก เป็นต้น</li>
                <li>พื้นที่สำหรับสินค้าทั่วไป 34,000 ตารางเมตร</li>
                <li>รองรับการให้บริการคลังสินค้าทั่วไปและการบรรจุชิ้นส่วนอะไหล่ตามที่ลูกค้าต้องการ</li>

                <li>สินค้าขาเข้าและขาออกควบคุมด้วยระบบการจัดการสินค้าคงคลัง WMS และ ระบบ AS/RS</li>
                <li>Auto rack และชั้นวางสินค้าสำหรับการจัดเก็บรองรับปริมาณสินค้าได้ 18,000 พาเลท</li>
                <li>รองรับสินค้าเข้าและออกเฉลี่ย 350,000 แพคเกจต่อเดือน</li>

              </ul>
            </div>
          </div>
        </div>
      <?php } ?>
    <?php } ?>


  </div>

</div>
</section>


</main>

<?php include("footer.php");?>




</body>
</html>