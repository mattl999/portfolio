<?php 
echo "<pre>";
    print_r($_POST);
echo '<pre>';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$message = wordwrap($message, 70, "\r\n");
$formcontent="From: $name \r\n Message: $message";
$recipient = "mattlobo25@gmail.com";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";

$body = "";

$body .= "From: ".$name. "\r\n";
$body .= "From: ".$email. "\r\n";
$body .= "From: ".$message. "\r\n";

echo "1: ".$recipient, "\r\n2: ".$subject, "\r\n3: ".$formcontent, "\r\n4: ".$mailheader;
// print_r($recipient, $subject, $formcontent, $mailheader);
$success =  mail($recipient, $subject, $formcontent, $mailheader); 
if (!$success) {
    $errorMessage = error_get_last()['message'];
}
echo "Thank You!";
?>