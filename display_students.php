<?php
// Connect to the database (replace placeholders with actual database credentials)
$servername = "localhost";
$username = "root@localhost";
$password = "";
$dbname = "student_records";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and display student records
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Grade: " . $row["grade"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
