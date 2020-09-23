<?php
include 'session.php';

?>
<!DOCTYPE html>
<html lang="">
  <head>
  <style>
    .myicon{
      width:200px;
      color:pink;
      border:20px solid ;
      border-radius:3px;
    }
    .myicon:hover{
      color:skyblue;
      border:25px solid ;
      border-radius:5px;

    }

  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attendance -<?php echo $title?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- custom css -->
    <link rel="stylesheet" href = "css/site.css" />
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-danger bg-success">
  <a class="navbar-brand" href="index.php">PHPLOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon myicon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewRecords.php">View Attendee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Training
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">PHP</a>
          <a class="dropdown-item" href="#">JAVA</a>
          <a class="dropdown-item" href="#">PYTHON</a>
          <div class="dropdown-divider">TEACH</div>
          <a class="dropdown-item" href="#">MATHS</a>
          <a class="dropdown-item" href="#">PHYSICS</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <?php
        if(!isset($_SESSION['user_id'])){
      
      ?>
    <li class="nav-item">
      </li><a class="nav-link" href="login.php">Login</a>
    </li>
    <?php }
    else{

    ?>
     <li class="nav-item">
     </li><a class="nav-link" href="#"> Hello <?php echo($_SESSION['username']) ?></a>
      </li>
     <li class="nav-item">
     </li><a class="nav-link" href="logout.php">Logout</a>
    </li>
   
    <?php }?>
    </ul>

  </div>
</nav>


<div class="container">


