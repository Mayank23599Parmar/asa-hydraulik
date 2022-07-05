<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$mail = new PHPMailer;
        
$mail->isSMTP();

$mail->Host = 'mail.vrtechie.in';

$mail->Port = 465;


$mail->SMTPSecure = 'ssl';

$mail->SMTPAuth = true;

$mail->Username = 'info@vrtechie.in';// enter your mail

$mail->Password = 'VRTechie@123';// enter pass

$mail->setFrom('info@vrtechie.in', 'VRTechie');  // Enter display email & name

$mail->addReplyTo('info@vrtechie.in', 'VRTechie');  // enter reply to mail & name


$mail->addAddress('vvnparmar@gmail.com');

$mail->Subject = 'Hello Test !!!';

$mail->msgHTML('Hello Test Email');

if (!$mail->send()) {
   $error = "Mailer Error: " . $mail->ErrorInfo;
  
} 


