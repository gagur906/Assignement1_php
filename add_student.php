<!---->
<!---->
<?php
//
//// Include the database connection script
//include 'db_connect.php';
//
//// Retrieve form data
//$name = $_POST['name'];
//$grade = $_POST['grade'];
//
//// Check if form data is submitted
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    // Retrieve form data
//    $name = $_POST['name'];
//    $grade = $_POST['grade'];
//
//    // Prepare and bind the INSERT statement
//    $stmt = $conn->prepare("INSERT INTO students (name, grade) VALUES (?, ?)");
//    $stmt->bind_param("ss", $name, $grade);
//
//    // Execute the statement
//    if ($stmt->execute()) {
//        // Redirect back to the student records page
//        header("Location: student_records.html");
//        exit();
//    } else {
//        echo "Error: " . $stmt->error;
//    }
//
//    // Close statement
//    $stmt->close();
//}
//
//// Close database connection
//$conn->close();
//?>






<?php

// Retrieve form data
$name = $_POST['name'];
$grade = $_POST['grade'];

// Insert data into the database
//// Include the database connection script
include 'db_connect.php';

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $grade = $_POST['grade'];

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO students (name, grade) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $grade);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect back to the student records page
        header("Location: student_records.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close database connection
$conn->close();
//?>
$sql = "INSERT INTO students (name, grade) VALUES ('$name', '$grade')";

if ($conn->query($sql) === TRUE) {
header("Location: student_records.html"); // Redirect back to the student records page
exit();
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>