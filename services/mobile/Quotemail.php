<?php
$name = $_REQUEST['q_name'];
$email = $_REQUEST['q_email'];
$company = $_REQUEST['q_company'];
$phone = $_REQUEST['q_phone'];
$message .= "Name: \r".$name."\r\n\n";
$message .= "Company Name: \r".$company."\r\n\n";
$message .= "Email: \r".$email."\r\n\n";
$message .= "Phone #: \r".$phone."\r\n\n";
$message .= "Message: \r".$_REQUEST['q_desc']."\r\n\n";

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