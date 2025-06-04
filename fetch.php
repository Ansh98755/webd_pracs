<!DOCTYPE html>
<html>
<head>
    <title>Fetch Records</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>User List</h2>

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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". htmlspecialchars($row["id"]) ."</td><td>"
            . htmlspecialchars($row["name"]) ."</td><td>"
            . htmlspecialchars($row["email"]) ."</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 results found.";
}

$conn->close();
?>

</body>
</html>
