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
$sql = "DROP TABLE users";

if ($conn->query($sql) === TRUE) {
    echo "Table dropped successfully.";
} else {
    echo "Error dropping table: " . $conn->error;
}

$conn->close();
?>