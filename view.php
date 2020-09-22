<?php
  $title = "View Records";
  require_once 'includes/header.php';
  require_once 'includes/auth_check.php';
  require_once 'db/conn.php';

  // get attendee by id
  if(!isset($_GET['id'])){
    include('includes/error_msg.php');
    header('Loction:viewRecords.php');
  }else{
    $id = $_GET['id'];
    $result = $crud->viewOne($id);
    include('includes/success_msg.php');


?>
<div class="card">
  <div class="card-header">
    <h1 class="text-primary bg-info">Attendee Detail</h1>
  </div>
  <div class="card-body">
    <h3 class="card-title"><?php echo $result['firstname'].' '.$result['lastname'];?></h3>
    <h5 class="card-text"><b>Date Of Birth:</b><?php echo $result['dob']?></h5>
    <h5 class="card-text"><b>Email Address:</b><?php echo $result['email']?></h5>
    <h5 class="card-text"><b>User Password:</b><?php echo $result['pass']?></h5>
    <h5 class="card-text"><b>Phone Number:</b><?php echo $result['contact']?></h5>
    <h5 class="card-text"><b>Specialty Area:</b><?php echo $result['specialty_name']?></h5>

  </div>
  <br>
  <div class="card-footer">
  <a href="index.php" class="btn btn-primary">Home</a>
  <a href="edit.php?id=<?php echo $result['attendee_id']?>" class="btn btn-warning">Edit</a>
  <a href="login.php" class="btn btn-info">View Records</a>

  </div>
</div>

<?php  
  } ?>




<br><br><br>

<?php require_once 'includes/footer.php'?>