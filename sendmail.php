<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';

require 'vendor/autoload.php';


$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('en', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  						  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'testtesttest911@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'mQGZBXX9NX7chiymj2lh'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('testtesttest911@mail.ru'); // от кого будет уходить письмо?


$mail->addAddress(''); // адресат


$name = $_POST['user_name'];
$email = $_POST['user_email'];
$number = $_POST['user_number'];
$message = $_POST['user_message'];

$mail -> Subject = 'Тестовая заявка. Равиль';

$mail->Body    = '' .$name . ' оставил сообщение'. '<br> Имя:'.$name. '<br>Телефон: ' .$number. '<br>Почта: ' .$email. '<br>Текст сообщения: ' .$message;

try {
    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//header('Location: http://testTask?back=yes');



?>
