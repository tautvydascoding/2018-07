<?php
//Load Composer's autoloader
require_once ('libs/PHPMailer-master/PHPMailerAutoload.php');

$klientoAntraste = $_POST['antraste'];
$klientoPastas = $_POST['elpastas'];
$klinetoVardas = $_POST['vardas'];
$klientoKlausimas = $_POST['klausimas'];


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
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
   $mail->SMTPDebug = 3;                                 // Enable verbose debug output
   $mail->isSMTP();                                      // Set mailer to use SMTP

   $mail->SMTPAuth = true;                               // Enable SMTP authentication
   $mail->Username = 'bulvesdykai@gmail.com';                 // SMTP username
   $mail->Password = 'bulvesfree123';                           // SMTP password

    //Recipients
    $mail->setFrom('bulvesdykai@gmail.com', 'Mailer');
    $mail->addAddress('bulvesdykai@gmail.com', 'Bulves nemokamai');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($klientoPastas, $klinetoVardas);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoAntraste;
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Nepavyko issiusti bandykite dar karta. Mailer Error: ', $mail->ErrorInfo;
}
