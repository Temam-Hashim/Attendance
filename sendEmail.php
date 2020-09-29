<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;
  require 'vendor/autoload.php';

 // use League\OAuth2\Client\Provider\Google;
// $provider = new Google([
//     'clientId'     => '{551317994133-iufp16fofugj1td12q4ghv6rhlvihqc5.apps.googleusercontent.com}',//google-client id
//     'clientSecret' => '{8nIyH_VDgoalnFnIdsR2JAvb}', //google client secret
//     'redirectUri'  => 'https://example.com/callback-url',
// ]);

  class myPHPMailer{
    public static function sendEmail($to){
  // to send test mail using mailtrap
    //only change the hots to smtp.mailtrap.io


// send using gmail smtp

      $mail = new PHPMailer();

      $mail->IsSMTP();
      // $mail->SMTPDebug = 1;//SMTP::DEBUG_SERVER;      // $mail->SMTPDebug = 2;
      // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; port 587;
      $mail->SMTPSecure = 'ssl'; // PHPMailer::ENCRYPTION_SMTPS port 465;
      $mail->Port = 465;  
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'ourgroupemail2018@gmail.com';
      $mail->Password = 'Temam@123';
      // $mail->CharSet = PHPMailer::CHARSET_UTF8;

      //set mail header
   

      $mail->setFrom('ourgroupemail2018@gmail.com', 'ATTENDANCE MAIL');
      $mail->addReplyTo('ourgroupemail2018@gmail.com', 'Temam');
      $mail->addAddress($to, 'Temam');
      $mail->AddBCC('bcc2@example.com', 'Anna');
      $mail->AddBCC('bcc3@example.com', 'Mark');

      $mail->isHTML(true);

      $mail->Subject = "PHP Training 2020";
      $mailcontnt = 'Welcome to PHP Training,\n,You have successfully Registered for this year PHP Taining Welcome';
      $mail->addEmbeddedImage('includes/images/default.png', 'site Logo');
      $mail->Body = $mailcontnt;
      $mail->Body = $mail->Body. '<img src="cid:site Logo"> Mail body in HTML';
      $mail->AltBody = 'This is the plain text version of the email content';

      if(!$mail->send()){
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      }else{
          echo 'Message has been sent';

      }
    }
  }

?>