<?php


require_once("config.php");

$query = $conn->prepare("INSERT INTO user (username,email, password) VALUES(?, ?, ?)");
$query->bind_Param('sss', $username, $email,$password);

$username = "Mariya";
$email = "m@gmail.com";
$password = "password";

$query->execute();
echo "Data inserted successfully";

$query->close();
$conn->close();



?>