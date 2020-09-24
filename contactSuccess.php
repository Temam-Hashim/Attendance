<?php
require_once 'db/conn.php';

    if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $date = date('Y-m-d');

      $result = $crud->insertContact($name,$email,$subject,$message,$date);
      if($result){
        include 'includes/success_msg.php';
        header('Location:index.php');
      }
      else{
        include 'includes/error_msg.php';

      }
    }

?>