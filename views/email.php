# Using Awesome https://github.com/PHPMailer/PHPMailer
<?php
print_r( parse_url(getenv("MAILGUN_API_KEY")));
print_r( parse_url(getenv("MAILGUN_DOMAIN")));
print_r( parse_url(getenv("MAILGUN_PUBLIC_KEY")));
print_r( parse_url(getenv("MAILGUN_SMTP_LOGIN")));
print_r( parse_url(getenv("MAILGUN_SMTP_PASSWORD")));
print_r( parse_url(getenv("MAILGUN_SMTP_PORT")));
print_r( parse_url(getenv("MAILGUN_SMTP_SERVER")));

echo 'MAILGUN_API_KEY'.'</br>';
echo 'MAILGUN_DOMAIN'.'</br>';
echo 'MAILGUN_PUBLIC_KEY'.'</br>';
echo 'MAILGUN_SMTP_LOGIN'.'</br>';
echo 'MAILGUN_SMTP_PASSWORD'.'</br>';
echo 'MAILGUN_SMTP_PORT'.'</br>';
echo 'MAILGUN_SMTP_SERVER'.'</br>';
?>
