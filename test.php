<?php
// Database connection parameters for remote MySQL server
$servername = "";  // Remote MySQL server IP address or hostname
$username = "";    // MySQL username for the remote server
$password = "your_password_here"; // MySQL password for the remote server
$dbname = "";   // Your database name

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully!";
?>
