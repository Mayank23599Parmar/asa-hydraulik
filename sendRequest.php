<?php

$c_name = $_POST['c_name'];
$f_name = $_POST['f_name'];
$s_name = $_POST['s_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$postal_code= $_POST['postal_code'];
$subject= $_POST['subject'];
$city= $_POST['city'];
$address= $_POST['address'];
$message_form= $_POST['message_form'];
$to = "mayankparmar23599@gmail.com";
$subject = "Mail From ASA website";
$txt ="Company Name = ". $c_name . "\r\n  Postal Code = " . $postal_code . "\r\n First Name =" . $f_name. "\r\n  Surname = " . $s_name . "\r\n Email =" . $email. "\r\n  Phone = " . $phone . "\r\n Subject =" . $subject. "\r\n  City = " . $city . "\r\n Address =" . $address. "\r\n  Comment = " . $message_form;
$headers = "From:$email" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers); 
}
?>