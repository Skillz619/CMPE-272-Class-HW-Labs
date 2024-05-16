<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "company_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get search query
$search_query = $_GET['search_query'];

// Prepare and execute SQL statement
$sql = "SELECT * FROM users WHERE first_name LIKE '%$search_query%' OR last_name LIKE '%$search_query%' OR email LIKE '%$search_query%' OR home_phone LIKE '%$search_query%' OR cell_phone LIKE '%$search_query%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Search Results</h2>";
    echo "<table border='1'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Home Address</th><th>Home Phone</th><th>Cell Phone</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first_name"]. "</td><td>" . $row["last_name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["home_address"]. "</td><td>" . $row["home_phone"]. "</td><td>" . $row["cell_phone"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No results found";
}

$conn->close();
?>
