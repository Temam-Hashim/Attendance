<?php
  $title = "Index";
  require_once 'includes/header.php';
  require_once 'db/conn.php';

  $result = $crud->getSpecialty();
?>
<style>
  .pro{
    cursor:pointer;
  }

</style>
  <h1 class="text-center text-primary">Registration for PHP Training </h1>
  
  <form action="success.php" method="POST" role="form"  enctype="multipart/form-data">
    <legend class="text-center text-success">PHP Registration</legend>
  
    <div class="form-group">
      <label for="fname">First Name</label><span color="red"> *</span>
      <input type="text" class="form-control" id="fname" name="fname" required>
    </div>
    <div class="form-group">
      <label for="lname">Last Name</label><span color="red"> *</span>
      <input type="text" class="form-control" id="lname" name="lname" required>
    </div>
    <div class="form-group">
      <label for="dob">DOB</label><span color="red"> *</span>
      <input type="text" class="form-control" id="dob" name="dob" required>
    </div>
    <div class="form-group">
      <label for="">Speciality</label><span color="red"> *</span>
      <select class="form-control" name="speciality" id="speciality">
          <?php while( $row=$result->fetch(PDO::FETCH_ASSOC) ){?>
            <option value="<?php echo $row['specialty_id'] ?>" required><?php echo $row['specialty_name']?></option>
          <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="email">Email</label><span color="red"> *</span>
      <input type="text" class="form-control" id="email" name="email" required>
      <small id="email" class="form-text text-muted">we will never share your email with any one</small>
    </div>
    <div class="form-group">
      <label for="">Password</label><span color="red"> *</span>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact Number</label><span color="red"> *</span>
      <input type="text" class="form-control" id="contact" name="contact" required>
      <small id="email" class="form-text text-muted">we will never share your Number with any one</small>
    </div>

    <label for="profile" class="pro">Upload Profile Picture</label><span color="blue"> *</span><br>
    <div class="form-group custom-file">
        <input type="file" accept="image/*"  class="custom-file-input pro" id="profile" name="profile">
        <label class="custom-file-label pro" for="profile" >Choose file</label>
        <small id="profile" class="form-text text-warning">profile picture is optional</small>
    </div>

    <button type="submit" class="btn btn-primary btn-block" id="submit" name="submit" >Register</button>
  </form>
<br><br><br>

<?php require_once 'includes/footer.php'?>

    
