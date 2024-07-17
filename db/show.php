<?php
require_once('config.php');

if(isset($_GET['id'])){
    $id =  $_GET['id'];

    $query = "SELECT * FROM user WHERE id = $id";
    // var_dump($query);
    // exit();
    $result = $conn->query($query);
    $rows = $result->fetch_assoc();
    //var_dump($rows);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show single user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>User Table</h2>
           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>  
        <tr>
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['username']; ?></td>
        <td><?php echo $rows['email']; ?></td>    
      </tr> 
    </tbody>
  </table>
</div>
   
</body> 
</html>