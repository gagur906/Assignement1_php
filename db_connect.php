<?php

// Database configuration
$servername = "localhost"; // Change this to your database host if it's different
$username = "root@localhost"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "student_records"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
