<?php
class Mailer {
	function sendMail($From,$FromName,$addAddress, $Subject, $Body){
		$mail = new PHPMailer;

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'postmaster@sandboxfc9f2823439b480389235db36a51b9f4.mailgun.org';   // SMTP username
		$mail->Password = 'c929327d22fcc9b6fec03e9a6438e8d3';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

		$mail->From = $From;
		$mail->FromName = $FromName;
		$mail->addAddress($addAddress);                 // Add a recipient

		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

		$mail->Subject =  $Subject;
		$mail->Body    =  $Body;

		$mail->IsHTML(true);

		if(!$mail->send()) {
		    return array('Message' => 'Message could not be sent.', 'Description' => 'Mailer Error: ' . $mail->ErrorInfo);
		} else {
		    return array('Message' => 'Message has been sent');
		}
	}
}

