<?php
//the example of inserting data with variable from HTML form
//input.php

$name = $_POST['name'];
$mobile_no = $_POST['mn'];
$city = $_POST['ct'];

include "classes/class.phpmailer.php"; // include the class name

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "mssecure14@gmail.com";
$mail->Password = "mebcghcxrxmgyego ";
$mail->SetFrom("mssecure14@gmail.com");
$mail->Subject = "New Partner";
//$mail->Body = "Thank you For your interest."."<br>"."Regards"."<br>"."Dinesh Gupta";
$mail->Body = "New Partners Details"."<br>"."Name :".$name."<br>"."Mobile Number :".$mobile_no."<br>"."City :".$city;
$mail->AddAddress("mssecure14@gmail.com");

//$mail->addReplyTo($emailTo,"R.D.Foming");
 if(!$mail->Send()){
	echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
	echo "Successfully Submited confirmation on your mail";
}


?>
