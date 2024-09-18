<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sampledatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = "Rendyll";

$sql = "SELECT * FROM mock_data WHERE first_name = 'Rendyll'";
$result = $conn->query($sql);

echo $result;

$conn->close();
?>
