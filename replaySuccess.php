<?php
    require_once 'db/conn.php';
    require_once 'sendEmail.php';

    if(isset($_POST['replay'])){

      $email = $_POST['email'];
      myPHPMailer::sendEmail($email);
        include 'includes/success_msg.php';
        header('Location:viewMessage.php');
  ?>
        <script>
           function abc(){
             document.getElementById['rep'].style.backgroundColor='pink';
           }
        </script>
  <?php
      }
      else{
        include 'includes/error_msg.php';
        header('Location:replay.php');

    }
    
  ?>