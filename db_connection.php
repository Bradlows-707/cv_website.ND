<?php
// Database connection settings
$host = 'localhost';     // MySQL server host
$username = 'root';      // MySQL username (default is root)
$password = '';          // MySQL password (leave blank if no password was set)
$database = 'cv_database'; // Name of your database

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!"; // Add this line to indicate a successful connection
}
?>
