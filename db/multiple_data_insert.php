<?php

require_once("config.php");

$query = "INSERT INTO  user(username,email,password) VALUES('Sadia', 'sadia@gmail.com','12222');";
$query .= "INSERT INTO  user(username,email,password) VALUES('Mehedi', 'm@gmail.com','12222')";

$sql = $conn->multi_query($query);

if($sql){
    echo "Data inserted successfully";
}
else{
    echo "Error";
}


?>