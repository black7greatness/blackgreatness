<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = 2;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com;';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'black7greatness@gmail.com';				
	$mail->Password = '*Dan123ki#';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('black7greatness@gmail.com', 'black greatness');		
	$mail->addAddress('black7greatness@gmail.com');
	$mail->addAddress('black7greatness@gmail.com', 'black greatness');
	
	$mail->isHTML(true);								
	$mail->Subject = 'Welcome to Black Greatness';
	$mail->Body = 'Welcome to <b>Black Greatness</b> ';
	$mail->AltBody = 'Welcome!';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
