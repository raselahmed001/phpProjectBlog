<?php

require_once("config.php");

$query = "INSERT INTO user(username,email,password) values ('Samima', 'samima@gmail.com','12345')";

$sql = $conn->query($query);

if($sql == true){
    //echo "Data inserted successfully";
    echo $conn->insert_id;//last data inserted
}
else {
    echo ("Error inserting data");
}

?>