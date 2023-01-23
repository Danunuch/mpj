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

  <?php include("slide.php");?>




  <section id="page-section" class="bg-parallax" style="background:url(images/bg01.jpg) no-repeat top center; background-size:cover;">

    <div class="container-xxl">


     <div class="text-center mb-5">
      <h2>MPJ <span>Logistics</span></h2>
      <h5>กลุ่มบริษัท MPJ GROUP ประกอบธุรกิจบริการจัดการโลจิสติกส์ ทั้งด้านการจัดส่งสินค้า และการบริการด้านการบริหาร<br>
        การจัดเก็บตู้คอนเทนเนอร์แบบครบวงจร สำหรับการบรรจุสินค้าภายในประเทศ เพื่อการนำเข้า-ส่งออกสินค้า รวมถึงการให้บริการเกี่ยวกับ<br>
        ซอฟต์แวร์สำเร็จรูปแบบครบวงจรและครอบคลุมทุกประเภทธุรกิจ พร้อมทั้งมีบริการหลังการขาย เราได้เปิดดำเนินการเป็นระยะเวลามากกว่า 12 ปี<br>
        โดยเรามุ่งมั่นที่จะเป็น “ผู้ให้บริการท้องถิ่นชั้นนำภายในประเทศ ด้านการจัดการโลจิสติกส์ ด้วยความเข้าใจถึงความต้องการในท้องถิ่น<br>
      ภายในประเทศ เราจะส่งมอบบริการที่ตรงความต้องการของลูกค้าในระดับมาตราฐานสากล เพื่อความสำเร็จของลูกค้า” </h5>
    </div>


    

    <div class="text-center mt-5">
      <a href="about.php" class="btn btn-dark btn-lg px-5 ">อ่านทั้งหมด</a> 
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
          <h2 class="img-fluid mb-5">กลุ่มบริษัทในเครือ</h2>


          <?php $ser1 = array ( 
            '1'=>"บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด (ธูรกิจ LOGISTICS)",
            '2'=>"บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (สำนักงานใหญ่)(ธุรกิจลานตู้)",
            '3'=>"บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (กรุงเทพฯ)(ธุรกิจ freight forwarder)",
            '4'=>"บริษัท เอ็ม พี เจ คลังสินค้า จำกัด (ธุรกิจคลังสินค้า)");
            ?>


            <div class="box-service">
   

                <a class="item-service" href="mpj_logistics.php">
                  <div class="img-service">
                    <img src="upload/service05.png">
                  </div>  
                  <div class="text-service">
                    <h4>บริษัท เอ็ม พี เจ โลจิสติกส์ จำกัด<br>(ธูรกิจ LOGISTICS)</h4>
                  </div>  
                </a>


                 <a class="item-service" href="mpj_logistics.php">
                  <div class="img-service">
                    <img src="upload/service05.png">
                  </div>  
                  <div class="text-service">
                    <h4>บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (สำนักงานใหญ่)<br>(ธุรกิจลานตู้)</h4>
                  </div>  
                </a>


                 <a class="item-service" href="mpj_logistics.php">
                  <div class="img-service">
                    <img src="upload/service05.png">
                  </div>  
                  <div class="text-service">
                    <h4>บริษัท เอ็ม พี เจ ดีสทริบิวชั่น เซ็นเตอร์ จำกัด (กรุงเทพฯ)<br>(ธุรกิจ freight forwarder)</h4>
                  </div>  
                </a>

                 <a class="item-service" href="mpj_logistics.php">
                  <div class="img-service">
                    <img src="upload/service05.png">
                  </div>  
                  <div class="text-service">
                    <h4>บริษัท เอ็ม พี เจ คลังสินค้า จำกัด<br>(ธุรกิจคลังสินค้า)</h4>
                  </div>  
                </a>

        
            </div>
          </div>


        </div>
      </div>
    </div>

  </section>



  <section id="new-section" class="bg-parallax" style="background:url(images/bg-blog01.jpg) no-repeat top center; background-size:cover;">

    <div class="container-xxl">

      <div class="text-center">
        <h2 class="mb-5">กิจกรรม</h2>
      </div>



         <?php $new_1 = array ( 
          '1'=>"กลุ่มบริษัท เอ็ม พี เจ ได้เล็งเห็นความสำคัญทางด้านการศึกษาของเยาวชนที่จะเติบโตเป็นผู้ใหญ่",

          '2'=>"กลุ่มบริษัท เอ็ม พี เจ ได้เข้าร่วมจัดงานกิจกรรมวันเด็กแห่งชาติประจำปี 2563",

          '3'=>"กลุ่มบริษัท เอ็ม พี เจ ได้ส่งเสริมและจัดกิจกรรมให้ความรู้เรื่องยาเสพติด",

          '4'=>"กลุ่มบริษัท เอ็ม พี เจ ร่วมจัดกิจกรรม CSR บริจาคทุนการศึกษา");
          ?>


          <?php $new_2 = array ( 
            '1'=>"26 มิถุนายน 2561",
            '2'=>"11 มกราคม 2563",
            '3'=>"7 มีนาคม 2564",
            '4'=>"18 มิถุนายน 2565");
            ?>


            <?php $new_3 = array ( 
              '1'=>"คณะผู้บริหารและพนักงาน กลุ่มบริษัท เอ็ม พี เจ
              ได้เล็งเห็นความสำคัญทางด้านการศึกษาของเยาวชนที่จะเติบโตเป็นผู้ใหญ่และเป็นกำลัง <br>
              สำคัญในการพัฒนาศักยภาพของสังคมไทย จึงได้จัดกิจกรรม CSR บริจาคทุนการศึกษา สิ่งของจำเป็นสำหรับเด็ก.....",

              '2'=>"วันเด็กแห่งชาติ กลุ่มบริษัท เอ็ม พี เจ ได้เข้าร่วมจัดงานกิจกรรมวันเด็กแห่งชาติประจำปี 2563  โดยมอบของขวัญ ของรางวัลให้กับเด็ก ๆ <br>
              พร้อมกับทำกิจกรรมเล่นเกมแจกของรางวัล และเลี้ยงอาหารกลางวัน ให้แก่ ชุมชนหมู่บ้านโชคนิมิตร
              และชุมชนหมู่บ้านกลางนา.....",

              '3'=>"กลุ่มบริษัท เอ็ม พี เจ ได้ส่งเสริมและจัดกิจกรรมให้ความรู้เรื่องยาเสพติด ให้กับลูกหลานในชุมชน เพื่อสร้างความรู้ความเข้าใจให้เด็กและเยาวชน <br>
              ได้มีภูมิคุ้มกันด้านป้องกันและห่างไกล ภัยยาเสพติดให้แก่นักเรียนชั้นประถมศึกษาปีที่ 5-6.....",

              '4'=>"ผ่านมา กลุ่มบริษัท เอ็ม พี เจ ร่วมจัดกิจกรรม CSR บริจาคทุนการศึกษา บริจาคเครื่องคอมพิวเตอร์ กระเป๋านักเรียน และอุปกรณ์การศึกษาต่าง ๆ ให้กับโรงเรียนบ้านดอนใหญ่พัฒนา....");
              ?>


              <!-- โรลเล็ก -->  <?php for($i=1;$i<=4;$i++){ ?>

<div class="bg-white mb-4">
              <div class="row align-items-center">
              
                  <div class="col-md-6 col-lg-3">
                    <a class="item-new" href="news-detail.php">
                      <div class="new-img">
                        <img class="img-fluid w-100" src="upload/new0<?=$i?>.jpg">
                      </div>
                    </a>
                  </div>

                  <div class="col-md-6 col-lg-9 p-4">
                    <h4><?= $new_1[$i] ?></h4>
                    <p><?= $new_2[$i] ?></p>
                    <p><?= $new_3[$i] ?></p>

                    <div class="">
                      <a href="news-detail.php" class="">อ่านทั้งหมด >></a> 
                    </div>

                    <!--  <span>อ่านทั้งหมด >></span> -->

                  </div> 



                

</div>
              </div>
  <?php } ?>
 


      <div class="text-end">
        <a href="even.php" class="btn btn-warning rounded-pill">ดูทั้งหมด >></a>
      </div>


   





  </div>





</div>

</section>










</main>



<?php include("footer.php");?>




</body>
</html>