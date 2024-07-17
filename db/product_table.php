<?php

require_once('config.php');


$query = "CREATE TABLE product (
    id INTEGER PRIMARY KEY  AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    price float
    
    
    )";

    $sql = $conn->query($query);
    if ($sql){
        echo "Table created";
    }
    else{
        echo "Table not created";
    }

?>