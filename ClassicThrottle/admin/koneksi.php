<?php
$servername = "localhost"; // or your server name
$username = "your_username"; // your database username
$password = "your_password"; // your database password
$dbname = "dbmobil"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
