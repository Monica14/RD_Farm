<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:615px;
	top:21px;
	width:37px;
	height:38px;
	z-index:1;
}
-->
</style>
<?php
//the example of inserting data with variable from HTML form
//input.php
$conn = mysql_connect("localhost","root","");
mysql_select_db("foming");
$sql = "SELECT * FROM invest";
$row = mysql_query($sql);
if($row)
{
$var = false;
$rslt=mysql_fetch_array($row);
if($rslt)
{
//$name = $rslt["Name"];
//$city = $rslt["city"];
$eml=$rslt["email"];

//$mobile_no = $_POST['mn'];


include "classes/class.phpmailer.php"; // include the class name

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "mssadafule@gmail.com";
$mail->Password = "zjoknsckquljxsod";
$mail->SetFrom("mssecure14@gmail.com");
$mail->Subject = "New Partner";
$mail->Body = "Thank you For your interest."."<br>"."Regards"."<br>"."Dinesh Gupta";
//$mail->Body = "New Partners Details"."<br>"."Name :".$name."<br>"."Mobile Number :<br>"."City :".$city;
$mail->AddAddress($eml);

//$mail->addReplyTo($emailTo,"R.D.Foming");
 if(!$mail->Send()){
	echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
    $part=$_POST['pt'];
	$nam=$rslt["Name"];;
	echo "Successfully Submited confirmation on your mail";
	$order = "INSERT INTO partner
			(mn,pt)
			VALUES
			('$nam','$part')";
			$result = mysql_query($order);
			
			if($result)
			{
			include 'aboutus.php';
			}	
			else
			{
			echo "Error Occured";
			}	
}

}
}
?>
