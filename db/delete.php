<?php
require_once("config.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM user WHERE id = $id";
    $result = $conn->query($query);

    if ($result == true) {
        header("Location:showalluser.php?message=Deleted successfully");
    }
    else{
        header("Location:showalluser.php?message=Not deleted ");
    }
        
}



?>