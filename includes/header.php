<?php
include 'session.php';

?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attendance -<?php echo $title?></title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- custom css -->
    <link rel="stylesheet" href = "css/site.css" />
  </head>
  <body>
  <div class="container">
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">PHP CONF.</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse bg-info">
    <ul class="nav navbar-nav navbar-dark">
      <li class="text-primary" style="color:green;font-size:16px"><a href="index.php">Home</a></li>
      <li style="color:green;font-size:16px"><a href="viewRecords.php">View Attendee</a></li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" name="searchval" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default" name="searchbtn">Search</button>
    </form>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Contact</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Page<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page1</a></li>
          <li><a href="#">Page2</a></li>
          <li><a href="#">Page3</a></li>
          <li><a href="#">Page4</a></li>
        </ul>
      </li>
      <?php
        if(!isset($_SESSION['user_id'])){
      
      ?>
    <li><a href="login.php">Login</a></li>
    <?php }
    else{

    ?>
     <li><a href="#"> Hello <?php echo($_SESSION['username']) ?></a></li>
     <li><a href="logout.php">Logout</a></li>
   
    <?php }?>
    </ul>

  </div><!-- /.navbar-collapse -->
</nav>
<br><br>
