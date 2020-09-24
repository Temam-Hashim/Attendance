<?php
     require_once 'includes/auth_check.php';
     require_once 'db/conn.php';

     if(isset($_GET['id']))
     {
 
        $id = $_GET['id'];
        $result = $crud->deleteMessage($id);
        if($result)
        {
          header("location: viewMessage.php");
          include('includes/success_msg.php');
        }
        else
        {
          include('includes/error_msg.php');
          header("location: viewMessage.php");
        }
    }
    else{
      include('includes/error_msg.php');

    }
  ?>


