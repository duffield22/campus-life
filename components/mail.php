<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$concerned_department = $_POST['concerned_department'];
$message = $_POST['message'];

$content="From: $name \nEmail: $email \nMessage: $message";
    if($concerned_department == "college1") {
        $recipient = "cohp@marshall.edu";
    }else if($concerned_department == "college2") {
        $recipient = "cecs@marshall.edu";
    }else if($concerned_department == "college3") {
        $recipient = "cschwarz@marshall.edu";
    }else if($concerned_department == "college4") {
        $recipient = "cos@marshall.edu";
    }else if($concerned_department == "college5") {
        $recipient = "cola@marshall.edu";
    }else if($concerned_department == "college6") {
        $recipient = "lcob@marshall.edu";
    }else if($concerned_department == "college7") {
        $recipient = "art@marshall.edu";
    }else if($concerned_department == "club1") {
        $recipient = "powell140@marshall.edu";
    else if($concerned_department == "club2") {
        $recipient = "marshallarcheryclub@gmail.com";
    }else if($concerned_department == "club3") {
        $recipient = "schletter@marshall.edu";
    }else if($concerned_department == "club4") {
        $recipient = "Jenkins156@marshall.edu";
    }else if($concerned_department == "club5") {
        $recipient = "marshallfencingclub@gmail.com";
    }else if($concerned_department == "club6") {
        $recipient = "green267@marshall.edu";
    }else if($concerned_department == "club7") {
        $recipient = "KoK_ChessClub@Yahoo.com";
    }else if($concerned_department == "club8") {
        $recipient = "murfc89@gmail.com";
    }else if($concerned_department == "club9") {
        $recipient = "ECA@marshall.edu";
    }else if($concerned_department == "club10") {
        $recipient = "ForceOfThunderingWill@gmail.com";
    }else if($concerned_department == "fraternity1") {
        $recipient = "Ihnat1@marshall.edu";
    }else if($concerned_department == "fraternity2") {
        $recipient = "Herd3@marshall.edu";
    }else if($concerned_department == "fraternity3") {
        $recipient = "moore908@marshall.edu";
    }else if($concerned_department == "fraternity4") {
        $recipient = "carr145@marshall.edu";
    }else if($concerned_department == "fraternity5") {
        $recipient = "Smith2702@marshall.edu";
    }else if($concerned_department == "fraternity6") {
        $recipient = "wvgammapresident@gmail.com";
    }else if($concerned_department == "fraternity7") {
        $recipient = "sigtaumarshall@gmail.com";
    }else if($concerned_department == "sorority1") {
        $recipient = "mace58@marshall.edu";
    }else if($concerned_department == "sorority2") {
        $recipient = "lulek@live.marshall.edu";
    }else if($concerned_department == "sorority3") {
        $recipient = "znoj@live.marshall.edu";
    }else if($concerned_department == "sorority4") {
        $recipient = "barickman@marshall.edu";
    }else if($concerned_department == "panhellinic1") {
        $recipient = "nunuchapter475@gmail.com";
    }else if($concerned_department == "panhellinic2") {
        $recipient = "velez5@marshall.edu";
    }else if($concerned_department == "panhellinic3") {
        $recipient = "ednupes@gmail.com";
    }else if($concerned_department == "panhellinic4") {
        $recipient = "nubetaques1971@yahoo.com";
    }else if($concerned_department == "panhellinic5") {
        $recipient = "jonescy@marshall.edu";
    }else if($concerned_department == "undergradadmissions") {
        $recipient = "admissions@marshall.edu";
    }else if($concerned_department == "gradadmissions") {
        $recipient = "graduateadmissions@marshall.edu";
    }else if($concerned_department == "bursars") {
        $recipient = "bursar@marshall.edu";
    }else if($concerned_department == "aid") {
        $recipient = "sfa@marshall.edu";
    }else if($concerned_department == "hrlife") {
        $recipient = "housing@marshall.edu";
    }else if($concerned_department == "registrar") {
        $recipient = "registrar@marshall.edu";
    }else if($concerned_department == "saffairs") {
        $recipient = "studentaffairs@marshall.edu";
    }
    else {
        $recipient = "info@campuslifemu.com";
    }
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");

//  To redirect form on a particular page
header("Location:../contact.php");
?>
