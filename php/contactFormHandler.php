<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$email_from = $email;
	
	$email_subject = $subject;
	
	$email_body = "$name \n".
					"$message.\n".
					"$email.\n";
					
	$to = "jerry.li1248@gmail.com";
	
	$headers = "From: $email_from \r\n";
	
	mail($to, $email_subject, $email_body, $headers);
	
	header("Location: contact.html");
	
?>