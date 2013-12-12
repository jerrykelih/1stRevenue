<?php

$to = "mailchimp@1strevenue.com";
$from = "mailchimp@1strevenue.com";

$headers = "From: " . $from . "\r\n";

$subject = "New Alpha Test User";
$body = "New Alpha Test User: " . $_POST['email'];


if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{ 
	if (mail($to, $subject, $body, $headers, "-f " . $from))
	{
		echo 'Alright ! You will be notified on <b>  ' . $_POST['email'] . '</b> :)';
	}
	else
	{
	   echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';	
	}
}
else
{
   echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';	
}

?>