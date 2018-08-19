<?php
// https://myaccount.google.com/lesssecureapps?pli=1

echo "pries email siuntima";
// print_r( $_GET ); // pasitrikrinti

$vard = $_GET['vardas'];
$klaus = $_GET['klausimas'];
$elpastas = $_GET['pastas'];


//Load composer's autoloader
require_once 'libs/PHPMailer-master/PHPMailerAutoload.php';

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
    $mail->Username = 'xxx@gmail.com';                 // SMTP username
    $mail->Password = 'xxx-xxx';                           // SMTP password


    //Recipients
    $mail->setFrom('---testascoding@gmail.com', 'Puslapiu kurejai');
    $mail->addAddress('testascoding@gmail.com', 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo( $elpastas, $vard);

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                               // Set email format to HTML
    $mail->Subject = 'Kliento klausimas';
    $mail->Body    = $klaus;
    $mail->AltBody = $klaus;


    if( $mail->send() ) {
        // code... createDoctor($vard, $klaus, $pastas);
    } else {
        // code...
    }

    echo 'O taip, email issiustas sekmingai';
} catch (Exception $e) {
    echo 'Nepavyko issiusti laisko. pabandykite dar kar, arba skambinkinte tel:xxxxxxx ', $mail->ErrorInfo;
}
