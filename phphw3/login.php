<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <form action="authenticate.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
        <?php
        // Display error message if authentication failed
        if (isset($_GET['error'])) {
            echo "<p class='error'>Invalid username or password. Please try again.</p>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cloud8Kit</p>
    </footer>
</body>
</html>
