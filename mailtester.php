<?php
	$recipient = "your@mailadress";
	$subject = "your subject";
	$text = "Testmail for PHP mail.";
	$extra = "From: Info <absender@adresse>\r\n";
		if(mail($recipient, $subject, $text, $extra))
{
	echo 'E-Mail sent.';
	}
?>
