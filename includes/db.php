<?php
// db.php: This file will store your DB connection

// Database server and credentials
$servername = "";  // Replace with your actual server address (e.g., IP address or domain name)
$username = "";  // Your MySQL username
$password = "=";  // Your MySQL password
$dbname = "";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, set character encoding
$conn->set_charset("utf8");

// Connection is successful, proceed with further queries

?>
