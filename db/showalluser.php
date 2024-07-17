<!DOCTYPE html>
<html lang="en">

<head>
    <title>User table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
</head>

<body>

    <div class="container mt-3">
        <h2>User Table</h2>
        <span>
            <?php
    if (isset($_GET['message'])){
        echo $_GET['message'];
    }
    
    ?>
        </span>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php 
    
    require_once('config.php');

    $query = "SELECT * FROM user";
    $sql = $conn->query($query);
    
    while($rows = $sql->fetch_assoc()){

    ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['username']; ?></td>
                    <td><?php echo $rows['email']; ?></td>

                    <td>
                        <a class="btn btn-sm btn-info" href="show.php?id=<?php echo $rows['id']; ?>">
                            <i class="fas fa-eye">View</i>
                        </a>

                        <a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $rows['id']; ?>">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $rows['id']; ?>"
                            onClick="return confirm('Are you sure to Delete?')">
                            <i class="fas fa-trash"></i>
                            Delete</a>

                    </td>
                </tr>

                <?php

        
    }
    
    
    ?>

            </tbody>
        </table>
    </div>

</body>

</html>