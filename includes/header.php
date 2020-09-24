<?php
include 'session.php';
include 'db/conn.php';

$res = $crud->countContact();

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
    .notification {
      background-color: #555;
      color: white;
      text-decoration: none;
      padding: 15px 26px;
      position: relative;
      display: inline-block;
      border-radius: 5px;
      background-image: url(https://i.imgur.com/aoXZqPc.gif);
      width:4px;
    }

    .notification:hover {
      background: red;
      
    }

    .notification .badge {
      position: absolute;
      top: -10px;
      right: -10px;
      padding: 5px 10px;
      border-radius: 50%;
      background-color: red;
      color: white;
     
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
    <!-- fontawsom icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href = "css/site.css" />
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-danger bg-success">
  <a class="navbar-brand" href="index.php"><i class="fa fa-heart-o fa-3x " aria-hidden="true"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon myicon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="list-group-item active" href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
      </li>
      <li class="nav-item">
      <a class="list-group-item" href="viewRecords.php"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Library</a>
      </li>
      <li class="nav-item">
      <a class="list-group-item" href="contact.php"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Contact</a>
      </li>
      <div class="btn-group open">
        <a class="btn btn-dark" href="#"><i class="fa fa-podcast" aria-hidden="true"></i>&nbsp; Training</a>
        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="fa fa-shield fa-fw"></i> PHP</a></li>
          <li><a href="#"><i class="fa fa-shield fa-fw"></i> PYTHON</a></li>
          <li><a href="#"><i class="fa fa-shield fa-fw"></i> JAVA</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="fa fa-shield fa-fw"></i>HTML</a></li>
        </ul>
      </div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="list-group-item btn-sm" type="search" placeholder="Search" aria-label="Search">
      </li><input class="list-group-item btn-sm" type="submit" value="Search">
    </form>
    <?php
        if(!isset($_SESSION['user_id'])){
      
      ?>
      <li class="nav-item">
      </li><a class="list-group-item" href="login.php"><i class="fa fa-pencil fa-sm" aria-hidden="true"></i>&nbsp; login</a>
      </li>
    <?php }
    else{

    ?>

     <li class="nav-item">
     </li><a class="list-group-item" href="#"> <span class="fa fa-user-circle-o" aria-hidden="true"></span><?php echo(strtoupper($_SESSION['username'])) ?></a>
      </li>
      <li class="nav-item">
      </li><a class="list-group-item" href="logout.php"><i class="fa fa-pencil " aria-hidden="true"></i>&nbsp; logout</a>
      </li>
      <li class="nav-item">
        <a href="viewMessage.php" class="notification"> <i class="badge"><?php echo $res['num'] ?></i></a> 
    </li>
   
    <?php }?>
    </ul>

  </div>
</nav>


<div class="container">