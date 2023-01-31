<?php
require_once('webpanelcw/config/mpj_db.php');
error_reporting(0);
if (!isset($_SESSION)) {
	session_start();
}



$stmt = $conn->prepare("SELECT * FROM email_3");
$stmt->execute();
$row_email = $stmt->fetchAll();


?>

<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';




if (isset($_POST['sentmail03'])) {
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
	for ($i = 0; $i < count($row_email); $i++) {
		$mail->addAddress($row_email[$i]['email']);
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
