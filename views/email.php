# Using Awesome https://github.com/PHPMailer/PHPMailer
<?php
print_r( getenv("MAILGUN_API_KEY"));

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                 // Enable SMTP authentication
$mail->Username = getenv("MAILGUN_SMTP_LOGIN");         // SMTP username
$mail->Password = getenv("MAILGUN_SMTP_PASSWORD");      // SMTP password
$Mailer->Port   = getenv("MAILGUN_SMTP_PORT");
$mail->SMTPSecure = 'tls';                              // Enable encryption, only 'tls' is accepted

$mail->From = getenv("MAILGUN_SMTP_LOGIN");
$mail->FromName = 'Mailer';
$mail->addAddress('bar@example.com');                 // Add a recipient

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
