<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>

body {background-color: black;}
.mailer {
  color:#fff;
  }

</style>
  <title>Document</title>
</head>
<body>
  




</body>
</html>







<?php

$klientoVardas = $_POST['name'];
$klientoQuestion = $_POST['question'];
$klientoEmail = $_POST['email'];

echo " <META http-equiv='refresh' content='0;URL=sent.php' ";

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require_once('libs/PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer(false);                              // Passing `true` enables exceptions
try {

  $mail->SMTPOptions = array(
    'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
    )
  );
  $mail->Host = 'tls://smtp.gmail.com:587';
  $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465;                                      // TCP port to connect to

//Server settings
  $mail->SMTPDebug = 0;                                 // Enable verbose debug output
  $mail->isSMTP();                                      // Set mailer to use SMTP

  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'kepuwebus@gmail.com';                 // SMTP username
  $mail->Password = 'KepuWebus9';                           // SMTP password


    //Recipients
  $mail->setFrom('kepuwebus@gmail.com', 'Mailer');
  $mail->addAddress('kepuwebus@gmail.com', 'Web kurejas');     // Add a recipient
  // $mail->addAddress('ellen@example.com');               // Name is optional
  $mail->addReplyTo($klientoEmail, $klientoVardas);
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');

    //Attachments
  // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = $klientoQuestion;
  $mail->Body = 'This is the HTML message body <b>in bold!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  // echo " <h1 class='mailer'> Jusu zinute issiusta! </h2>";


} catch (Exception $e) {
  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
