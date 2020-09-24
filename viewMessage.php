<?php

  $title = "View Contact";
  require_once 'includes/header.php';
  require_once 'includes/auth_check.php';
  require_once 'db/conn.php';
  
  $result = $crud->getContact();

  ?>
<style>
  tbody:hover{
    background-color:gray;
    cursor:pointer;

  }
</style>
<table class="table table-hover table-striped table-bordered table-sm">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Message</th>
      <th>Date</th>
     <th>Action</th> 
    </tr>
  </thead>
  <?php 
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tbody>
    <tr class="r">
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['subject'] ?></td>
      <td><?php echo $row['message'] ?></td>
      <td><?php echo $row['date'] ?></td>
      <td>
      <a class="btn btn-info btn-sm" id="rep"
          onclick="abc();"
          href="replay.php?id=<?php echo $row['id'] ?>">REPLY
        </a>
        
        <a class="btn btn-danger btn-sm" 
          onclick="return confirm('are you sure you want to delate this message?')"
          href="deleteMessage.php?id=<?php echo $row['id'] ?>">DELETE
        </a>
      </td>
    </tr>
   </tbody>
   <?php
  }

  ?>

</table>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php require_once 'includes/footer.php'?>