<?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // You can perform your authentication logic here
        // For simplicity, let's assume username is 'admin' and password is 'password'
        $valid_username = 'admin';
        $valid_password = 'password';

        // Check if the provided credentials are valid
        if ($username === $valid_username && $password === $valid_password) {
            // Authentication successful, redirect to a dashboard page
            header("Location: dashboard.php");
            exit();
        } else {
            // Authentication failed, display an error message
            echo "<p style='color: red;'>Invalid username or password.</p>";
        }
    }
    ?>
