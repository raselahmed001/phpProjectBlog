<?php  
require_once('../db/config.php');
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user where username = ? and password = ?";

//$sql = $conn->query($query);
$sql = $conn->prepare($query);
$sql->bind_param('ss', $username,$password);
$sql->execute();
$result = $sql->get_result();

if($result->num_rows>0){
    $mes = "Login successfully";
    

    $_SESSION["username"] = $username;
    header("location: dashboard.php?message=$mes");
    exit();
    
//     while($row = $sql->fetch_assoc()){
       
//         echo $row['username']."<br>";
    }
   
 else{
    $mes =  "Something messing";
    header("location: login.php?message=$mes");
    exit();
}

$sql->close();

$conn->close();
?>