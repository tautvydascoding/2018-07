<?php
include_once('header.php');
 ?>

        <div class="container">
            <?php
            include_once('top-navbar.php');
            include_once('db-prekiu-info.php');

             if (isset($_POST['email']) && ($_POST['pranesimas'])) {
                 $sukurti = createKlausimas($_POST['vardas'], $_POST['email'], $_POST['tema'], $_POST['pranesimas']);
                 // echo "<META http-equiv='refresh' content='1;URL=profile.php'> ";
                 echo "<div class='alert alert-success' role='alert'>";
                 echo "Zinute sekmingai issiusta, su jumis susisieksime greitu metu";
                 echo "</div>";
             }
             ?>

             <div class="row">
               <div class="col-md-12">
                   <h1>Susisiekite su mumis</h1>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               </div>
               <div class="col-md-6">
                   <form id='kontaktu-forma' action="#" class="pb-1" method="post">
                       <div class="form-group">
                           <label for="vardas">Vardas</label>
                           <input type="text" class="form-control" name="vardas">
                       </div>
                      <div class="form-group">
                        <label for="elPastas">El. pastas</label>
                        <input type="text" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                          <label for="Tema">Tema</label>
                          <input type="text" class="form-control" name="tema">
                      </div>
                      <div class="form-group">
                        <label for="pranesimas">Pranesimas</label>
                        <textarea class="form-control" rows="3" name="pranesimas" maxlength='500'></textarea>
                      </div>
                      <button id='submit-mygtukas' type="submit" class="btn btn-primary btn-lg btn-block">Siusti</button>
                    </form>
               </div>
             </div>
        </div>

        <?php
        include_once('footer.php');
         ?>

         <?php
         //Load Composer's autoloader
         require_once ('libs/PHPMailer-master/PHPMailerAutoload.php');

         if (isset($_POST['vardas'])) {
             $klinetoVardas = $_POST['vardas'];
             $klientoAntraste = $_POST['tema'];
             $klientoPastas = $_POST['email'];
             $klientoKlausimas = $_POST['pranesimas'];

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
                 $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                 $mail->isSMTP();                                      // Set mailer to use SMTP

                 $mail->SMTPAuth = true;                               // Enable SMTP authentication
                 $mail->Username = 'bulvesdykai@gmail.com';                 // SMTP username
                 $mail->Password = 'slaptazodis';                           // SMTP password

                 //Recipients
                 $mail->setFrom('bulvesdykai@gmail.com', 'Projektas 2018');
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
             } catch (Exception $e) {
                echo '<script language="javascript">';
                echo 'alert("Nepavyko issiusti zinutes pabandykite dar karta")';
                echo '</script>';
             }
         }
