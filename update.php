<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ayushdb";
$port = 3309;

$conn = new mysqli($servername, $username, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user_id = 1; 
$new_name = "Updated Name";

$sql = "UPDATE users SET name='$new_name' WHERE id=$user_id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>