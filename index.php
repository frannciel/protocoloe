# https://github.com/PHPMailer/PHPMailer/wiki/Using-Gmail-with-XOAUTH2
# https://github.com/PHPMailer/PHPMailer/tree/master/examples
# https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting
# https://www.gn10.com.br/blog/dicas/envie-emails-php-smtp-gmail-google-apps/
# https://documentation.mailgun.com/en/latest/quickstart-sending.html#send-via-smtp
# http://rberaldo.com.br/enviando-e-mails-com-a-classe-phpmailer/
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//$mail = new PHPMailer();
$mail = new PHPMailer;

$mail->SMTPDebug = 2;

print_r(getenv("EMAIL_SMTP_SERVER"));
print_r(getenv("EMAIL_SMTP_LOGIN"));
print_r(getenv("EMAIL_SMTP_PASSWORD"));
print_r(getenv("EMAIL_SMTP_PORT"));
echo "</br>";

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host     = getenv("EMAIL_SMTP_SERVER");          // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                 // Enable SMTP authentication
$mail->Username = getenv("EMAIL_SMTP_LOGIN");         // SMTP username
$mail->Password = getenv("EMAIL_SMTP_PASSWORD");      // SMTP password
$Mailer->Port   = getenv("EMAIL_SMTP_PORT");
$mail->SMTPSecure = 'tls';                              // Enable encryption, only 'tls' is accepted

$mail->From = getenv("EMAIL_SMTP_LOGIN");
$mail->FromName = 'compras eunápolis';
$mail->addAddress('frannciel@gmail.com','Anderson castro');                 // Add a recipient

//Set who the message is to be sent from
//$mail->setFrom('from@example.com', 'First Last');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
//$mail->addAddress('whoto@example.com', 'John Doe');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'PHPMAil testando envio ';
$mail->Body    = 'Testing some Mailgun awesomness';

print_r($mail);
echo "</br>";
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
