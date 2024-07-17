<?php

require_once('../db/config.php');

// Retrieve the code from the POST request
$code = $_POST['code'];

// Prepare and execute the SQL query
$query = "UPDATE user SET status = 'Approved' WHERE code = ?";
$result = $conn->prepare($query);
$result->bind_param("s", $code);

if ($result->execute()) {
    // Redirect on successful update
    header("Location: login.php?message=Verify successfully done");
} else {
    // Redirect on error
    header("Location: sign-up.php?message=Verify code error");
}

// Close the statement
$result->close();
$conn->close();

?> 