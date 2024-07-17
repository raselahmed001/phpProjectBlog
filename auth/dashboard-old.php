<?php

session_start();

if(isset($_SESSION["username"])){
    echo $_SESSION["username"];
    echo "<br>";
}
else{
    $mes =  "Please login";
    header("location: login.php?message=$mes");
    
}


?>

<a href="logout.php">Log out</a>