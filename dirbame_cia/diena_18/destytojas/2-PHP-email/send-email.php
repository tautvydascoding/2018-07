<?php

require_once( 'libs/PHPMailer-master/PHPMailerAutoload.php');

$klientoVardas =  $_POST['vardas'];
$klientoAntraste =  $_POST['antrate'];
$klientoKlausimas = $_POST['klausimas'];
$klientoEmail =     $_POST['elpastas'];



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais

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
    $mail->Username = ' @gmail.com';                 // SMTP username
    $mail->Password = ' slaptazodukas';
    //=-============================================

     //Recipients
    $mail->setFrom('testascoding@gmail.com', 'Mailer');
    $mail->addAddress('testascoding@gmail.com', 'Web kurejai');     // Add a recipient
    $mail->addReplyTo(   $klientoEmail, $klientoVardas   );



        $klientoAntraste =  $_POST['antrate'];
        $klientoKlausimas = $_POST['klausimas'];

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoAntraste;
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;

    $mail->send();

    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Nepavyko issiusti , pabandykite dar karta. Mailer Error: ', $mail->ErrorInfo;
}
