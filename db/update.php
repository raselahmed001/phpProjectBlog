<?php
// require_once('config.php');

// $id = $_GET['id'];

// $username = $_POST['username'];
// $email = $_POST['email'];

// $query = "UPDATE user SET username = '$username', email = '$email' WHERE id = $id";

// $result = $conn->query($query);

// if ($result== true) {
//     header("Location:showalluser.php?message=Updated successfully");
// }
// else{
//     header("Location:showalluser.php?message=Not updated");
// }

//best practice

require_once('config.php');

// Retrieve the code from the POST request
$code = $_POST['code'];

// Prepare and execute the SQL query
$query = "UPDATE user SET status = 'Approved' WHERE code = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $code);

if ($stmt->execute()) {
    // Redirect on successful update
    header("Location: login.php?message=Verify successfully done");
} else {
    // Redirect on error
    header("Location: sign-up.php?message=Verify code error");
}

// Close the statement
$stmt->close();

?>

    