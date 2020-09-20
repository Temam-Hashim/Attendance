<?php
  $title = "Success";
  require_once 'includes/header.php';
  require_once 'db/conn.php';
  if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];;
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $contact = $_POST['contact'];
    $speciality = $_POST['speciality'];


    $isSuccess = $crud->insert($fname,$lname,$dob,$email,$pass,$contact,$speciality);
    if($isSuccess){
      include('includes/success_msg.php');
     
    }
    else{
      include('includes/error_msg.php');
      header('Loction:viewRecords.php');
    }

  }
?>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['fname'].' '.$_POST['lname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['speciality']?></h6>
 
    <p class="card-text">Date Of Birth:<?php echo $_POST['dob']?></p>
    <p class="card-text">Email Address:<?php echo $_POST['email']?></p>
    <p class="card-text">User Password:<?php echo $_POST['password']?></p>
    <p class="card-text">Phone Number:<?php echo $_POST['contact']?></p>

  </div>
</div>
<br>
<div class="card-footer">
  <a href="index.php" class="btn btn-primary">Home</a>
  <a href="edit.php?id=<?php echo $result['attendee_id']?>" class="btn btn-warning">Edit</a>
  <a href="viewRecords.php" class="btn btn-info">View All Records</a>
</div>

<br><br><br>

<?php require_once 'includes/footer.php'?>