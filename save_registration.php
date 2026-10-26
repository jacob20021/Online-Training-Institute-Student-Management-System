<?php
// Database connection
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "institute";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST values
$full_name = trim($_POST['full_name']);
$email     = trim($_POST['email']);
$course    = trim($_POST['course']);

// Validate
if ($full_name == "" || $email == "" || $course == "") {
    echo "All fields are required.";
    exit;
}

// Insert using prepared statement
$stmt = $conn->prepare("INSERT INTO registrations (full_name, email, course) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $full_name, $email, $course);

if ($stmt->execute()) {
    echo "<h3>Student registered successfully.</h3>";
    echo '<a href="view_registrations.php">View Registrations</a><br>';
    echo '<a href="index.html">Back to Registration</a>';
} else {
    if ($conn->errno == 1062) {
        echo "Error: Email already registered.";
    } else {
        echo "Error: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>