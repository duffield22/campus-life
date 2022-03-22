<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$concerned_department = $_POST['concerned_department'];
$message = $_POST['message'];

$content="From: $name \nEmail: $email \nMessage: $message";
if($concerned_department == "club1") {
        $recipient = "info@campuslifemu.com";
    }
    else if($concerned_department == "club2") {
        $recipient = "marketing@domain.com";
    }
    else if($concerned_department == "technical support") {
        $recipient = "tech.support@domain.com";
    }
    else {
        $recipient = "duffvinci@gmail.com";
    }
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");

//  To redirect form on a particular page
header("Location:../contact.php");
?>
