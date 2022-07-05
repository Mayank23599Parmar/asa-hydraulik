<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include('connection.php');
session_start();
$msg1 = "";
$msg2 = "";
if (isset($_REQUEST['enq_formBtn'])) 
{
    $name = $_REQUEST['enq_name'];
    $email = $_REQUEST['enq_email'];
    $contact = $_REQUEST['mobile'];

    $insert = "INSERT INTO inquiry(name,email,contact) VALUES('$name','$email','$contact')";
    $run = mysqli_query($conn,$insert);

    if ($run) {
                 $msg1 = "Thank You..!!";
                 $_SESSION["msg1"]= $msg1;
                require 'vendor/autoload.php';
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->Port = 465;
                $mail->SMTPSecure = 'ssl';
                $mail->SMTPAuth = true;
                $mail->Username = 'email@krahejanibmpunephase6.com';// enter your mail
                $mail->Password = 'VRTechie@123';// enter pass
                $mail->setFrom('email@krahejanibmpunephase6.com', 'K Raheja');  // Enter display email & name
                $mail->addReplyTo('email@krahejanibmpunephase6.com', 'K Raheja');  // enter reply to mail & name
                $mail->addAddress('info@krahejanibmpunephase6.com');
                
                $mail->Subject = 'K Raheja nibm pune phase 6';
                
                $mail->msgHTML('Thank You !!!'.$name."  ".$email."  ".$contact);
                
                if (!$mail->send()) {
                   $error = "Mailer Error: " . $mail->ErrorInfo;
                  
                } 
    }
}
?>