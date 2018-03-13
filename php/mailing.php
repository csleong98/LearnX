<?php

require 'vendor/autoload.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
$mail->Host = 'tls://smtp.gmail.com:587';
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->SMTPDebug = 4;
$mail->Username = '';
$mail->Password = '';

$mail->setFrom('noreply@learnx.com', 'LearnX');
$mail->addAddress('spaceman@hotmail.my');
$mail->Subject = "testing";
$mail->Body = "hi there";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {
    echo 'Message has been sent';
}
?>