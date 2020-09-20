<?php
 require_once 'db/conn.php';
   //get data using post


    if(isset($_POST['saveChange'])){
      $id = $_POST['id'];
      $firstname=$_POST['fname'];
      $lastname=$_POST['lname'];
      $dob=$_POST['dob'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
      $specialty_id=$_POST['specialty'];
      $contact=$_POST['contact'];
      
      $changeSaved = $crud->update($id,$firstname,$lastname,$dob,$email,$pass,$specialty_id,$contact);

    }
    if($changeSaved){
      include('includes/success_msg.php');
      header('Location:viewRecords.php');
    }
    else{
       include('includes/error_msg.php');
       header('Location:viewRecords.php');
    }
?>


<br><br><br>

<?php require_once 'includes/footer.php'?>