<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, home_address, home_phone, cell_phone) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $first_name, $last_name, $email, $home_address, $home_phone, $cell_phone);

// Set parameters and execute
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$home_address = $_POST['home_address'];
$home_phone = $_POST['home_phone'];
$cell_phone = $_POST['cell_phone'];

if ($stmt->execute()) {
    echo "New user created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
