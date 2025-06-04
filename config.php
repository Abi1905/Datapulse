<?php
$host = "localhost"; // Change if needed
$user = "root"; // Default user in XAMPP/WAMP
$pass = ""; // Leave empty if no password
$dbname = "contact_db"; 

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
