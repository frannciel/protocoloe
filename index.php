<?php

//echo "Chegou aqui 1 </br>";
//require_once 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
//require_once 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
//require 'PHPMailerAutoload.php';
//require_once 'vendor/autoload.php';
//include 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
//use PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

echo "Chegou aqui 2 </br>";
//$mail = new PHPMailer();
$mail = new PHPMailer(true);

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                 // Enable SMTP authentication
$mail->Username = getenv("MAILGUN_SMTP_LOGIN");         // SMTP username
$mail->Password = getenv("MAILGUN_SMTP_PASSWORD");      // SMTP password
$Mailer->Port   = getenv("MAILGUN_SMTP_PORT");
$mail->SMTPSecure = 'tls';                              // Enable encryption, only 'tls' is accepted

$mail->From = getenv("MAILGUN_SMTP_LOGIN");
$mail->FromName = 'Mailer';
$mail->addAddress('frannciel@gmail.com');                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'Hello';
$mail->Body    = 'Testing some Mailgun awesomness';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

print_r(getenv("MAILGUN_SMTP_SERVER"));

?>
