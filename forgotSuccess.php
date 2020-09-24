<?php
     require_once 'db/conn.php';


    if(isset($_POST['update'])){
      $username = $_POST['username'];
      $pass = $_POST['pass'];
      $pass2 = $_POST['pass2'];

      if($pass!=$pass2){
        echo "<h3 class='alert text-warning bg-danger'>Password doesn't match</h3>";
      }
      else
      {
      $new_password = md5($pass.$username);
      $res = $user->updatePassword($username,$new_password);

      if($res){
        include('includes/success_msg.php');
        header("Location:login.php");
      }
      else{
        header('Location:forgot.php');
        include "includes/error_msg.php";
        
      }
    }
      
    }

?>