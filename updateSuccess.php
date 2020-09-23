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
      
      
    // upload file
    $origional_file = $_FILES['profile']['tmp_name'];
    $ext = pathinfo($_FILES['profile']['name'],PATHINFO_EXTENSION);
    $target_dir = 'upload/';
    // $destination = $target_dir.basename($_FILES['profile']['name']);
    $destination = $target_dir.$contact.'.'.$ext;
    move_uploaded_file($origional_file,$destination);
      
      $changeSaved = $crud->update($id,$firstname,$lastname,$dob,$email,$pass,$specialty_id,$contact,$destination);

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