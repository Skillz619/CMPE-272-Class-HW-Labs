<?php
try {
    // Connect to SQLite database for Company A
    $pdoA = new PDO('sqlite:/var/www/html/companyC.db');
    
    // Fetch list of users
    $query = $pdoA->query('SELECT * FROM users');
    $list_of_users = $query->fetchAll(PDO::FETCH_ASSOC);
    
    // Display the list of users
    echo '<h1>List of Users from Company C:</h1>';
    foreach ($list_of_users as $user) {
        echo "ID: {$user['id']}, Name: {$user['name']}, Email: {$user['email']}<br>";
    }
} catch (PDOException $e) {
    echo 'Database connection failed: ' . $e->getMessage();
}
?>
