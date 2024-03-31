<?php
session_start(); // Start the session

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the provided username and password are correct
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate username and password (Replace this with your actual authentication logic)
    if ($username === "admin" && $password === "password123") {
        // Authentication successful, set session variable
        $_SESSION["authenticated"] = true;
        
        // Redirect to the index page
        header("Location: index.php");
        exit();
    } else {
        // Authentication failed, redirect back to login page with error message
        header("Location: login.php?error=1");
        exit();
    }
}
?>
