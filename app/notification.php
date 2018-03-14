<?php
include('db_sjet.php');
$sql = "SELECT * FROM ADMIN";
$result = mysqli_query($conn,$sql);
require "PHPMailer/class.phpmailer.php";

define('GUSER', 'raimazach@gmail.com'); // GMail username
define('GPWD', '****'); // GMail password

function smtpmailer($to, $from, $from_name, $subject, $body) {
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Priority = 1;
	$mail->IsHTML(true);
//	$Mail->CharSet = 'UTF-8';
 //  	$Mail->Encoding = '8bit';
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}

$name = $_POST[name];
$email = $_POST[email];
$message = $_POST[message];
$subject = $_POST[subject];

$msg = "<html><body style='padding:30px;background:#AAA;'><div style='width:500px;margin:30px auto;background:#FFF;padding:40px;'><center><h2>Silver Jubilee Endowment Trust</h2></center><br><br>Hi,<br> 
				There has been a contact request by $name . The details and the message are given below:<br>
				<strong>Name :</strong> $name<br>
				<strong>email:</strong> $email<br>
				<strong>Message :</strong><br> $message</div></body></html>";
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if(smtpmailer($row[email], 'raimazach@gmail.com' , 'Silver Jubilee Endowment Trust', $subject, $msg)){
			echo("<script type='text/javascript'> alert('Your message has been sent'); </script>");
		}
		else{
			echo("<script type='text/javascript'> alert('Message could not be recorded due to a technical error. Please try later'); </script>");
		}
	}
}
header("Location:index.php");
?>
