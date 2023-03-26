<?php

require __DIR__ . '/vendor/autoload.php';

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/phpmailer/PHPMailer.php');
require_once(__DIR__ . '/phpmailer/SMTP.php');
require_once(__DIR__ . '/phpmailer/Exception.php');


// mail 
$body = ""; // initialize the variable before the loop
$c = true;
$title = "Send mail"; // theme mail
// body
foreach ($_POST as $key => $value) {
	if ($value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject") {
		$body .= "
    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
      <td style='padding: 10px; border: 1px solid #e9e9e9;'><b>$key</b></td>
      <td style='padding: 10px; border: 1px solid #e9e9e9 ;'>$value</td>
    </tr>
    ";
	}
}

$body = "<table style='width: 100%;'>$body</table>";

// setting PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
	$mail->isSMTP();
	$mail->CharSet = "UTF-8";
	$mail->SMTPAuth   = true;

	// setting my mail
	$mail->Host       = 'smtp.gmail.com';
	$mail->Port       = 587;
	$mail->SMTPSecure = 'tls';

	// config.php
	$mail->Username   = SMTP_USERNAME; // Change the value to your email address (e.g. "example@gmail.com")
	$mail->Password   = SMTP_PASSWORD; // Replace SMTP_PASSWORD with your actual password for apps

	$mail->setFrom(EMAIL_FROM); // Sender's name 

	// The person who receives the email.
	$mail->addAddress(EMAIL_TO);

	// SEND MAIL
	$mail->isHTML(true);
	$mail->Subject = $title;
	$mail->Body = $body;

	$mail->send();
} catch (Exception $e) {
	$status = "Message was not sent. Error: {$mail->ErrorInfo}";
}
