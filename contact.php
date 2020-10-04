<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$msg = $name."\n".$email."\n".$message;

mail("jerry.li1248@gmail.com", $subject, $msg);
?>

<!DOCTYPE html>
<html>
<body>
	<a href="contact.html">Go Back</a>
</body>
</html>