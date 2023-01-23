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
     <h3 class="text-warning">ร่วมงานกับเรา</h3>
   </div>







   <h4 class="text-dark">สวัสดิการ</h4>


   <ul>
    <li>ประกันสังคม</li>
    <li>กองทุนสำรองเลี้ยงชีพ</li>
    <li>ประกันอุบัติเหตุ</li>
    <li>ตรวจสุขภาพประจำปี</li>
    <li>ชุดฟอร์ม</li>
    <li>ฝึกอบรมและพัฒนา</li>
    <li>งานเลี้ยงสังสรรค์ประจำปี</li>
    <li>ทุนการศึกษาบุตร</li>
    <li>พักร้อนประจำปี 7 วัน</li>
    <li>วันหยุดประจำปี 14 วัน</li>
    <li>โบนัส–ปรับเงินเดือนพนักงานทุกปี</li>
    <li>เงินช่วยเหลือกรณีบิดา มารดา คู่สมรส บุตร เสียชีวิต</li>
    <li>คอมมิชชั่น (เฉพาะเจ้าหน้าที่ขาย)</li>
  </ul>

















  <h4 class="text-dark mt-5">ดูตำแหน่งที่เปิดรับ</h4>





  <?php $Job = array ( 
    '1'=>"เจ้าหน้าที่บัญชี 1 อัตรา ", 
    '2'=>"เจ้าหน้าที่ฝ่ายขาย (Sales) 2 อัตรา", 
    '3'=>"เจ้าหน้าที่การเงิน 1 อัตรา", 
    '4'=>"ผู้จัดการฝ่ายการเงิน  1 อัตรา", 
    '5'=>"เจ้าหน้าที่การตลาด 1 อัตรา", 
    '6'=>"เจ้าหน้าที่จัดซื้อ 1 อัตรา", 
    '7'=>"เจ้าหน้าที่ประสานงานขาย 2 อัตรา", 
    '8'=>"จป.วิชาชีพ 1 อัตรา", 
    '9'=>"ช่างช่อมไฟฟ้า / เครื่องยนต์  2 อัตรา"
  ); ?>




  <?php for($i=1;$i<=9;$i++){ ?> 
    <div class="qa-box">
      <a href="javascript:;" class="qa-title"><?= $Job[$i] ?>
      <div class="box-icon">
        <span></span>
        <span></span>
      </div>
    </a>

    <div class="qa-content" style="display: none;">
      <h5 class="text-dark">เพศ</h5>
      <ul>
        <li>หญิง</li>
      </ul>
      <h5 class="text-dark">อายุ</h5>
      <ul>
        <li>22-35 ปี</li>
      </ul>
      <h5 class="text-dark">วุฒิการศึกษา</h5>
      <ul>
        <li>ป.ตรี ขึ้นไป</li>
      </ul>
      <h5 class="text-dark">คุณสมบัติ</h5>
      <ul>
        <li>ถ้าสามารถสื่อสารภาษาอังกฤษได้จะพิจารณาเป็นพิเศษ</li>
      </ul>
      <h5 class="text-dark">ช่วงเวลาปฏิบัติงาน</h5>
      <ul>
        <li>จันทร์-ศุกร์ 8.00-17.00 น.</li>
      </ul>
    </div>
  </div>
<?php } ?>








<div class="text-center my-5">
 <h3 class="text-warning">สนใจสมัครงาน</h3>
</div>

<div class="text-center">
  <p>กรอกข้อมูลด้านล่างพร้อมแนบแบบฟอร์มสมัครงาน</p>

  <a href="upload/pdf.pdf" class="btn btn-warning rounded-0" target="_blank"><span class="material-icons-sharp">vertical_align_bottom</span> ดาวน์โหลดแบบฟอร์มสมัครงานที่นี่</a>
</div>














<div class="row mt-5">
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputName">ชื่อ - นามสกุล <span class="text-danger">*</span></label>
      <input name="contact[name]" type="text" class="form-control rounded-0" id="inputName" placeholder="">
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputName">อายุ <span class="text-danger">*</span></label>
      <input name="contact[name]" type="text" class="form-control rounded-0" id="inputName" placeholder="">
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputEmail">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
      <input name="contact[email]" type="email" class="form-control rounded-0" id="inputEmail" placeholder="">
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputEmail">อีเมล <span class="text-danger">*</span></label>
      <input name="contact[phone]" type="tel" class="form-control rounded-0" id="inputEmail" placeholder="">
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputEmail">ตำแหน่งงานที่ต้องการสมัคร <span class="text-danger">*</span></label>
      <input name="contact[email]" type="email" class="form-control rounded-0" id="inputEmail" placeholder="">
    </div>
  </div>


  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputEmail">เงินเดือนที่ต้องการ <span class="text-danger">*</span></label>
      <input name="contact[phone]" type="tel" class="form-control rounded-0" id="inputEmail" placeholder="">
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputEmail">ประสบการณ์ในการทำงาน (ปี)</label>
      <select class="form-select rounded-0" aria-label="Default select example">
       <option value=""></option>
       <option value="ไม่มีประสบการณ์" data-calc-value="ไม่มีประสบการณ์">
         ไม่มีประสบการณ์         
       </option>
       <option value="1-2 ปี" data-calc-value="1-2 ปี">
         1-2 ปี         
       </option>
       <option value="2-3 ปี" data-calc-value="2-3 ปี">
         2-3 ปี          
       </option>
       <option value="3-4 ปี" data-calc-value="3-4 ปี">
         3-4 ปี         
       </option>
       <option value="4-5 ปี" data-calc-value="4-5 ปี">
         4-5 ปี         
       </option>
       <option value="มากกว่า 5 ปี" data-calc-value="มากกว่า 5 ปี">
         มากกว่า 5 ปี         
       </option>
     </select>
   </div>
 </div>

 <div class="col-md-6">
  <div class="form-group mb-3">
      <label for="formFile" >แนบแบบฟอร์มสมัครงาน <span class="text-danger">*</span></label>
  <input class="form-control rounded-0" type="file" id="formFile">
  </div>
</div>

  <div class="col-md-12">
    <div class="form-group mb-3">
      <label for="inputName">สอบถามเพิ่มเติม</label>
      <textarea name="contact[body]" class="form-control rounded-0" rows="8" placeholder="เขียนข้อความของคุณที่นี่" id="textareaMessage"></textarea>
    </div>

  </div>
  <div class="col-md-12 text-center">




    <a href="" class="btn btn btn-dark btn-lg rounded-0 px-lg-5">สมัครงาน</a>
  </div>



</div>






<div class="text-center my-5">
 <h3 class="text-warning">แจ้งเรื่องร้องเรียน</h3>
</div>



<div class="row mt-5">
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputName">ชื่อเรื่อง</label>
      <input name="contact[name]" type="text" class="form-control rounded-0" id="inputName" placeholder="กรอกชื่อเรื่อง">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputName">ชื่อ</label>
      <input name="contact[name]" type="text" class="form-control rounded-0" id="inputName" placeholder="กรอกชื่อ">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputEmail">อีเมล</label>
      <input name="contact[email]" type="email" class="form-control rounded-0" id="inputEmail" placeholder="กรอกอีเมล">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="inputEmail">โทรศัพท์</label>
      <input name="contact[phone]" type="tel" class="form-control rounded-0" id="inputEmail" placeholder="กรอกโทรศัพท์">
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group mb-3">
      <label for="inputName">ข้อความ</label>
      <textarea name="contact[body]" class="form-control rounded-0" rows="8" placeholder="เขียนข้อความของคุณที่นี่" id="textareaMessage"></textarea>
    </div>

  </div>
  <div class="col-md-12 text-center">



    <img src="images/Captcha-demo.gif" width="280" height="76" alt="">


    <div class="clearfix mt-3"></div>

    <a href="" class="btn btn btn-dark btn-lg rounded-0 px-lg-5"><i class="icofont-send-mail"></i> ส่งข้อความ</a>
    <a href="" class="btn btn btn-dark btn-lg rounded-0 px-lg-5"><i class="icofont-refresh"></i> ล้างข้อมูล</a>
  </div>
</div>
















</div>

</section>



</main>


<?php include("footer.php");?>




</body>
</html>