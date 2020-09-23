<?php
  $title = "EDIT RECORDS";
  require_once 'includes/header.php';
  require_once 'includes/auth_check.php';
  require_once 'db/conn.php';

  $result = $crud->getSpecialty();

  if(!isset($_GET['id'])){
    include('includes/error_msg.php');
  }
  else{
    $id = $_GET['id'];
    $attendee = $crud->viewOne($id);
    



 
 
?>

  <h1 class="text-center text-primary">EDIT RECORDS </h1>
  
  <form action="updateSuccess.php" method="POST" role="form" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'];?>"/>
    <legend class="text-center text-success">PHP Update</legend>
  
    <div class="form-group">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" value="<?php echo $attendee['firstname']?>" id="fname" name="fname" placeholder="enter firstname">
    </div>
    <div class="form-group">
      <label for="lname">Last Name</label>
      <input type="text"  value="<?php echo $attendee['lastname']?>" class="form-control" id="lname" name="lname">
    </div>
    <div class="form-group">
      <label for="dob">DOB</label>
      <input type="text"  value="<?php echo $attendee['dob']?>" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group">
      <label for="">Specialty</label>
      <select class="form-control" name="specialty" id="specialty">
          <?php while( $row=$result->fetch(PDO::FETCH_ASSOC) ){?>
            <option name="specialty" value="<?php echo $row['specialty_id'] ?>" <?php if($row['specialty_id']==$attendee['specialty_id']){
              echo 'selected';
            }
              ?>>
                  <?php echo $row['specialty_name']?>
            </option>
          <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text"  value="<?php echo $attendee['email']?>" class="form-control" id="email" name="email">
      <small id="email" class="form-text text-muted">we will never share your email with any one</small>
    </div>
    <div class="form-group">
      <label for="">Password</label>
      <input type="password"  value="<?php echo $attendee['pass']?>" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
      <label for="contact">Contact Number</label>
      <input type="text"  value="<?php echo $attendee['contact']?>" class="form-control" id="contact" name="contact">
      <small id="contact" class="form-text text-muted">we will never share your Number with any one</small>
    </div>

    <label for="profile" class="pro">Upload Profile Picture</label><span color="blue"> *</span><br>
    <div class="custom-file">
        <input type="file" accept="image/*" value="<?php echo $attendee['profile']?>"  class="custom-file-input pro" id="profile" name="profile">
        <label class="custom-file-label pro" for="profile" >Choose file</label>
        <small id="profile" class="form-text text-warning">profile picture is optional</small>
    </div>
  
    
  
    <button type="submit" width="80" onclick="return confirm('are you sure you want to make change to this record?')" class="btn btn-primary " id="submit" name="saveChange" >Save Change</button>
    <button class="btn btn-warning" href="viewRecords.php">Go Back</button>
  </form>
  <?php  } 

  ?>

<br><br><br>

<?php require_once 'includes/footer.php'?>