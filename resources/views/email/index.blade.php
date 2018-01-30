<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$to      = 'info@icedu.id';
	$subject = 'You got email from your website';
	$message = "Dear ICEDU Indonesia,

	You have got a message from your website. Details of the message are listed below:

	Sender Name: $name
	Sender Email: $email
	Sender Phone: $phone
	Message: $message

	Thank you for your attention";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers = 'From: no-reply@icedu.id' . "\r\n" .
		'Reply-To: ICEDU.ID' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	$mail = mail($to, $subject, $message, $headers);
	
    header("Location: http://icedu.id/contact");
?>
