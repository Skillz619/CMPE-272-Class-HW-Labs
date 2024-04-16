<?php
try {
    // Connect to SQLite database for Company A
    $pdoA = new PDO('sqlite:/var/www/html/companyA.db');
    
    // Fetch list of users
    $query = $pdoA->query('SELECT * FROM users');
    $list_of_users = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Database connection failed: ' . $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company A Founders</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Additional styles for the page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .founders {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .founder {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .founder img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Company A Founders</h1>
    <div class="founders">
        <?php
        // Display the list of users as founders
        foreach ($list_of_users as $user) {
            echo '<div class="founder">';
            // Assuming you have profile pictures stored in the images folder
            echo '<img src="images/profile_' . $user['id'] . '.jpg" alt="' . $user['name'] . '">';
            echo '<h2>' . $user['name'] . '</h2>';
            echo '<p>Email: ' . $user['email'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
