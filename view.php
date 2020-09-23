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
<div class="card" style="width: 25rem;">
  <div class="card-body">
  <h5 class="card-title"><?php echo $result['firstname'].' '.$result['lastname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['specialty_name']?></h6>
    <img height="auto" class="card-img-top rounded" src="<?php echo empty($result['profile']) ? "upload/blank.png" : $result['profile']  ?>" alt="<?php echo $result['firstname'] ?>">
    <hr color="blue">

 
    <p class="card-text">Date Of Birth:<b><?php echo "  ".$result['dob']?></b></p>
    <p class="card-text">Email Address:<b><?php echo "  ".$result['email']?></b></p>
    <p class="card-text">User Password:<b><?php echo "  ".$result['pass']?></b></p>
    <p class="card-text">Phone Number:<b><?php echo "  ".$result['contact']?></b></p>

  </div>
</div>
<br>
<div class="card-footer">
  <a href="index.php" class="btn btn-primary">Home</a>
  <a href="edit.php?id=<?php echo $result['attendee_id']?>" class="btn btn-warning">Edit</a>
  <a href="viewRecords.php" class="btn btn-info">View Records</a>
</div>

<?php  
  } ?>




<br><br><br>

<?php require_once 'includes/footer.php'?>