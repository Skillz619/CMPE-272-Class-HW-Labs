<?php
session_start(); // Start the session

// Check if the user is authenticated
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    // User is not authenticated, redirect to the login page
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shreek's Cloud8Kit</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Cloud8Kit</h1>
        <nav>
            <ul>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=about">About</a></li>
                <li><a href="?page=products">Products/Services</a></li>
                <li><a href="?page=news">News</a></li>
                <li><a href="?page=contact">Contact</a></li>
                <li><a href="?page=lab4">Lab4</a></li> <!-- New Lab4 tab -->
            </ul>
        </nav>
    </header>
    
    <main>
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            $page = rtrim($page, '/');
            $page = filter_var($page, FILTER_SANITIZE_STRING);

            switch ($page) {
                case 'home':
                    echo '<section id="home"><h2>Welcome to Cloud8Kit</h2><p>We are the new age cloud-AI based hosting and deployments software. Easy to Collab, Integrate, Host and deploy. Check out our products and contact us for further business pricing.</p><p>Created by Shreekar Kolanu</p><p>Company Name: Cloud8Kit</p></section>';
                    break;
                case 'about':
                    echo '<section id="about"><h2>About Us</h2><p>We are a Cloud and AI-based solutions product that offers productive deployments and CI/CD integrations.</p></section>';
                    break;
                case 'products':
                    echo '<section id="products"><h2>Our Products/Services</h2><p>CASB, CI/CD</p></section>';
                    break;
                case 'news':
                    echo '<section id="news"><h2>Latest News</h2><p>Released 1.0 version for open source contribution using Golang.</p></section>';
                    break;
                case 'contact':
                    echo '<section id="contact"><h2>Contact Us</h2>';
                    // Read contacts from the text file
                    $contacts = file('contacts.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    echo "<ul>";
                    foreach ($contacts as $contact) {
                        // Split the contact data by comma
                        $contact_info = explode(',', $contact);
                        $name = isset($contact_info[0]) ? trim($contact_info[0]) : '';
                        $email = isset($contact_info[1]) ? trim($contact_info[1]) : '';
                        // Output the contact as list item
                        echo "<li>$name - $email</li>";
                    }
                    echo "</ul>";
                    
                    echo '</section>';
                    break;
                case 'lab4': // New case for the Lab4 page
                    echo '<section id="lab4"><h2>Lab4</h2>';
                    echo '<ul>';
                    echo '<li><a href="company_a.php">Company A</a></li>';
                    echo '<li><a href="company_b.php">Company B</a></li>';
                    echo '<li><a href="company_c.php">Company C</a></li>';
                    echo '</ul>';
                    echo '</section>';
                    break;
                default:
                    include('home.php');
                    break;
            }
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My PHP Website</p>
    </footer>
</body>
</html>
