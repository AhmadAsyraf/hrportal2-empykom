<?php
// Database connection parameters
$host = "localhost"; // Hostname of the database server
$username = "root"; // Your database username
$password = ""; // Your database password
$database = "empicom"; // The name of your database

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
