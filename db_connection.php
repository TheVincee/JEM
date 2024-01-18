<?php
$servername = "localhost";  // replace with your database host
$username = "root";  // replace with your database username
$password = "";  // replace with your database password
$dbname = "courier_db";  // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, set the character set to utf8 (if your application uses utf8)
$conn->set_charset("utf8");
?>
