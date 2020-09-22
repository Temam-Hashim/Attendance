<?php
  $title = "USER LOGIN ";
  require_once 'includes/header.php';
  require_once 'db/conn.php';

  //check post method in same page for this login page usin
  // htmlentities 
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = strtolower(trim($_POST['username']));
    $pass = $_POST['pass'];
    $new_password = md5($pass.$username);
    $result = $user->getUser($username,$new_password);

    if($result){
      $_SESSION['username'] = $username;
      $_SESSION['user_id'] =  $result['user_id'];
      header('Location: viewRecords.php');
    }
    else{
      include 'includes/error_msg.php';
      echo $result['username'];
    }
  }
  // <?php if(empty($username) && $_SERVER['REQUEST_METHOD']=='POST') echo "<p text-danger >$username_error</p>" 
  // <?php if(empty($password) && isset($password_error)) echo "<p text-danger >$password_error</p>" 

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
<form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">

    <div class="form-group">
      <label for="username">User Name</label><span color="red"> *</span>
      <input type="text" class="fm form-control" id="username" name="username" value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $_POST['username'] ?>">
    </div>

    <div class="form-group">
      <label for="">Password</label><span color="red"> *</span>
      <input type="password" class="fm form-control" id="pass" name="pass" required>
    </div>

    <div>
      <input type="submit" class="btn btn-primary btn-lg" value="Login" name="login"/>
      <a href="forgot.php" class="">Forgot Password</a>
    </div>

</form>

<br><br><br><br>

<?php require_once 'includes/footer.php'; ?>

