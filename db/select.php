<?php


// require_once("config.php");

// $query = "SELECT * FROM user";

// $sql = $conn->query($query);

// // var_dump($query);

// if($sql->num_rows>0){
//     //echo "Data for user";
//     while($row = $sql->fetch_assoc()){
//         //var_dump($row);
//         echo $row['username']."<br>";
//     }
// }
// else{
//     echo "Data not found";
// }

//best way to

require_once("config.php");

// Prepare the SQL query
$query = "SELECT * FROM user";
$sql = $conn->prepare($query);

// Execute the query
$sql->execute();
$result = $sql->get_result();

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<h2>User Data:</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['username'], ENT_QUOTES, 'UTF-8') . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No data found.</p>";
}

// Close the statement
$sql->close();
?>

<!-- Optional: Closing the database connection -->
<?php $conn->close();

?>




