<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message .= "Name: \r".$name."\r\n\n";
$message .= "Message: \r".$_REQUEST['question']."\r\n";

$subject = "Contact Form";
$headers .= $email."\r\n";
$headers .= "Reply-To: ".$email."\r\n";

$send_mail = mail("info@appstrophic.com,support@appstrophic.com", $subject, $message, $headers);
if(!$send_mail)
{
	header("location:index.php?failed");
}
else
{
	header("location:index.php?sent");
}

?>