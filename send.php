<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// var_dump($_POST);
if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = 'adamebert27@gmail.com';
    // $mail->Username = $_POST["email"];
    // $mail->Password = '';
    $mail->Password = 'rakgtghsfjtlurtw';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    // var_dump($_POST["email"]);
    // exit;
    // $mail->setFrom('adamebert27@gmail.com');
    $mail->setFrom('Saurabh@gmail.com');
    $mail->addAddress('adamebert27@gmail.com');
    // $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"] . $_POST["email"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "<script>alert('Sent Successfully'); 
document.location.href = 'index.php';
</script>
";
}
