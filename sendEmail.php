<?php
  require 'vendor/autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;

  class myPHPMailer{
    public static function sendEmail($to){
      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->Host = 'smtp.mailtrap.io';
      $mail->SMTPAuth = true;
      $mail->Username = '40a212b375e60f'; //paste one generated by Mailtrap
      $mail->Password = '9a8be1649babcd'; //paste one generated by Mailtrap
      $mail->SMTPSecure = 'tls';
      $mail->Port = 2525; // can also be 2525 or 465 or 587

      //set mail header
   

      $mail->setFrom('ourgroupemail2018@gmail.com', 'ATTENDANCE MAIL');
      $mail->addReplyTo($to, 'Temam');
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