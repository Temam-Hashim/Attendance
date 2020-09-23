<?php
  class SendEmail{
    public static function sendMail($to,$subject,$content){
      $key = "heroku sendgrid key";
      $email = new \SendGrid\Mail\Mail();
      $email->setFrom("ourgroupemail2018@gmail.com","Temam");
      $email->setSubject($subject);
      $email->addTo($to);
      $email->addContent('text/plain',$content);
      // $email->addContent('text/html',$content);
      $sendGrid = new \SendGrid($key);

      try{
        $response = $sendGrid->send($email);
        return $response;

      }catch(Exception $e){
        echo "Email Exception ".$e->getMessage()."\n";
        return false;
      }
    // $sent = mail($to,$subject,$content);
    // return $sent;

   }
  }
  
?>