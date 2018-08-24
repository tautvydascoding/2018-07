<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$klientoVardas = $_POST['name'];
$klientoQuestion = $_POST['question'];
$klientoEmail = $_POST['email'];

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
  $mail->SMTPDebug = 2;                                 // Enable verbose debug output
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'kepuwebus@gmail.com';                 // SMTP username
  $mail->Password = 'KepuWebus9';                           // SMTP password
                          // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
  $mail->setFrom('kepuwebus@gmail.com', 'Mailer');
  $mail->addAddress('kepuwebus@gmail.com', 'Web kurejas');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
  $mail->addReplyTo($klientoEmail, $klientoVardas);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Here is the subject';
  $mail->Body = 'This is the HTML message body <b>in bold!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}