<?php
function Send_Mail($to,$nombre,$subject,$body){
	require 'class.phpmailer.php';
	$from       = "soporte@directorioleon.com";
	$mail       = new PHPMailer();

	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	
	// Set PHPMailer to use the sendmail transport
	$mail->isSendmail();
	
	//Set who the message is to be sent from
	$mail->setFrom('soporte@directorioleon.com', utf8_decode('Directorio de  León'));
	
	//Set an alternative reply-to address
	$mail->addReplyTo('soporte@directorioleon.com', utf8_decode('Directorio de  León'));
	
	//Set who the message is to be sent to
	$mail->addAddress($to, $nombre);
	
	//Set the subject line
	$mail->Subject = $subject;
	
	$mail->Host = 'localhost';
	
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML($body);
	
	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';

	//send the message, check for errors
	if (!$mail->send()) {
		return "Mailer Error: " . $mail->ErrorInfo;
	} else {
		return "Mensaje enviado!";
	}

}
?>
