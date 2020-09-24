<?php
//LOCAL CONNECTION
    // $host = '127.0.0.1';
    // $user = 'root';
    // $pass = '';
    // $db = 'php_training';
    // $charset = 'utf8mb4';

//REMOTE CONNECTION
    $host = 'remotemysql.com';
    $user = 'eeLjT0Y51U';
    $pass = 'GUc9FvRiQg';
    $db = 'eeLjT0Y51U';
    $charset = 'utf8mb4';

    // dsn = data set name but you can use any variable
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try{
      $pdo = new PDO($dsn,$user,$pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      


    }catch(PDOException $e){
      echo $e->getMessage();
      // throw new PDOException($e->getMessage());

    }
    // include the crud
    require_once 'crud.php';
    require_once 'user.php';
    // create new class of crud
    $crud = new crud($pdo);
    // create object of user class
    $user = new user($pdo);

    $user->insertUser('admin','admin123');
  
    
    
    

?>