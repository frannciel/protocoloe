<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//$mail = new PHPMailer();
$mail = new PHPMailer;

$mail->SMTPDebug = 2;

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                 // Enable SMTP authentication
$mail->Username = getenv("EMAIL_SMTP_LOGIN");         // SMTP username
$mail->Password = getenv("EMAIL_SMTP_PASSWORD");      // SMTP password
$Mailer->Port   = getenv("EMAIL_SMTP_PORT");
$mail->SMTPSecure = 'tls';                              // Enable encryption, only 'tls' is accepted

$mail->From = getenv("EMAIL_SMTP_LOGIN", 'franciel castro');
$mail->FromName = 'Franciel Castro';
$mail->addAddress('frannciel@gmail.com','Anderson castro');                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'PHPMAil testando envio ';
$mail->Body    = 'Testing some Mailgun awesomness';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
