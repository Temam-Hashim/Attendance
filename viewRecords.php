<?php
  $title = "View Records";
  require_once 'includes/header.php';
  require_once 'db/conn.php';

  $result = $crud->getAttendee();


?>

<table class="table table-hover table-striped table-bordered table-sm">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Specialty</th>
      <th colspan="3">Action</th>
    </tr>
  </thead>
  <?php 
    while($row = $result->fetch(PDO::FETCH_ASSOC)){


    ?>
    <tbody>
    <tr>
      <td><?php echo $row['attendee_id'] ?></td>
      <td><?php echo $row['firstname'] ?></td>
      <td><?php echo $row['lastname'] ?></td>
      <td><?php echo $row['specialty_name'] ?></td>
      <td>
        <a href="view.php?id=<?php echo $row['attendee_id']?>" class="btn btn-primary">View</a>
        <a href="edit.php?id=<?php echo $row['attendee_id']?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure You want to delete this Record')" href="delete.php?id=<?php echo $row['attendee_id']?>" class="btn btn-danger" name="delete">Delete</a>
      </td>
    </tr>
   </tbody>
   <?php
  }

  ?>

</table>


<br><br><br>

<?php require_once 'includes/footer.php'?>