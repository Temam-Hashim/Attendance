<?php
      $title = "Forgot Passsword ";
      require_once 'includes/header.php';
?>

<style>

    .fm{
      border: 2px solid skyblue;
      border-radius: 12px;
      width:500px;
      position:relative;
      margin: 22px;
      padding:22px;

    }
    .btn[value="login"]{
      padding:10px;
      margin:50px;
      border-radius:12px;
      position: relative;

    }
    .btn[value="login"]:hover{
      cursor:pointer;
      color:Pink;

    }
    .btn[value="login"]{
      width:100px;
      align-content:center;
    }



  </style>



<h1 class="text-left text-info"><ul><?php echo $title?></ul></h1>
<form action="forgotSuccess.php" method="POST">

    <div class="form-group">
      <label for="username" class="text-primary">User Name</label><span color="red"> *</span>
      <input type="text" class="fm form-control" id="username" name="username" value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $_POST['username'] ?>">
    </div>

    <div class="form-group">
      <label for="pass" class="text-primary">New Password</label><span color="red"> *</span>
      <input type="password" class="fm form-control" id="pass" name="pass" required>
    </div>
    <div class="form-group">
      <label for="pass2" class="text-primary">Confirm Password</label><span color="red"> *</span>
      <input type="password" class="fm form-control" id="pass2" name="pass2" required>
    </div>

    <div >
      <input type="submit" class="btn btn-primary btn-lg" id="update" value="Upadte Password" name="update">
      <a href="login.php" class="btn btn-warning btn-lg">GO Back</a>
   </div>
      

</form>

<br><br><br><br>

<?php require_once 'includes/footer.php'; ?>