<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
  session_start();
}



    $stmt = $conn->prepare("SELECT * FROM email_5");
    $stmt->execute();
    $row_email_5 = $stmt->fetchAll();


    $st = $conn->prepare("SELECT * FROM email_6");
    $st->execute();
    $row_email_6 = $st->fetchAll();

?>


<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';




if (isset($_POST['sentmail'])) {
	$fullname = addslashes($_POST['fullname']);
	$age = addslashes($_POST['age']);
	$phone = addslashes($_POST['phone']);
	$email = addslashes($_POST['email']);
	$position = addslashes($_POST['position']);
	$money = addslashes($_POST['money']);
	$exp = addslashes($_POST['exp']);
	$pdf = $_FILES['pdf'];
	$doc_file = (isset($_POST['pdf']) ? $_POST['pdf'] : '');
	$message = addslashes($_POST['message']);
	
	// $to = "programmer@thaibyhost.com";
	// $to1 = "programmer1@thaibyhost.com";
	$attachment = $_FILES["pdf"]["tmp_name"];
	$folder = "upload/";
	$file_name = $_FILES["pdf"]["name"];
    move_uploaded_file($_FILES["pdf"]["tmp_name"], $folder . $_FILES["pdf"]["name"]);

	$msg =  "เรื่อง : " . "สมัครงาน" . "\n" .
		"จากคุณ : " . $name . "\n" .
		"อีเมล : " . $email . "\n" .
		"เบอร์โทรศัพท์ : " . $phone . "\n" .
		"สมัครตำแหน่ง : " . $position . "\n" .
		"เงินเดือนที่ต้องการ : " . $money . "\n" .
		"ประสบการณ์ : " . $exp . "\n" .
		"สอบถามเพิ่มเติม : " . $message;

	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->From = $email;
	$mail->Subject = "สมัครงาน";
	$mail->Body = $msg;
	$mail->addAddress($to);
	$mail->addAddress($to1);

	$attach_file = $folder . "" . $file_name;
	$mail->addAttachment($attach_file, $file_name);
	$mail->send();
	for ($i=0 ;$i<count($row_email_5); $i++){
		$mail->addAddress($row_email_5[$i]['email']);
	}

	if ($mail) {
		echo "<script>alert('ส่ง Email สำเร็จ')</script>";
		echo "<meta http-equiv='refresh' content='0;url=career.php'>";
	} else {
		echo "<script>alert('ส่ง Email ไม่สำเร็จ')</script>";
	}
}





if (isset($_POST['sentmail6'])) {
	$title = addslashes($_POST['title']);
	$fullname = addslashes($_POST['fullname']);
	$email = addslashes($_POST['email']);
	$phone = addslashes($_POST['phone']);
	$message = addslashes($_POST['message']);
	
	// $to = "programmer@thaibyhost.com";
	// $to1 = "programmer1@thaibyhost.com";
	// $attachment = $_FILES["pdf"]["tmp_name"];
	// $folder = "upload/";
	// $file_name = $_FILES["pdf"]["name"];
    // move_uploaded_file($_FILES["pdf"]["tmp_name"], $folder . $_FILES["pdf"]["name"]);

	$msg =  "เรื่อง : " . $title . "\n" .
		"จากคุณ : " . $fullname . "\n" .
		"อีเมล : " . $email . "\n" .
		"เบอร์โทรศัพท์ : " . $phone . "\n" .
		"ข้อความ : " . $message;
		

	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->From = $email;
	$mail->Subject = $title;
	$mail->Body = $msg;
	for ($i=0 ;$i<count($row_email_6); $i++){
		$mail->addAddress($row_email_6[$i]['email']);
	}
	
	// $mail->addAddress($to1);

	// $attach_file = $folder . "" . $file_name;
	// $mail->addAttachment($attach_file, $file_name);
	// $mail->send();

	if ($mail) {
		echo "<script>alert('ส่ง Email สำเร็จ')</script>";
		echo "<meta http-equiv='refresh' content='0;url=career.php'>";
	} else {
		echo "<script>alert('ส่ง Email ไม่สำเร็จ')</script>";
	}
}