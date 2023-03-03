<?php
session_start();

$code = $_POST['codeVal'];

if($code == $_SESSION['security_code'])
{
	echo "matched";
}
else
{
	echo "notmacthed";
}


?>
