<?php
session_start();


session_unset();
header("location: login.php?message=Log out successful"); 
?>