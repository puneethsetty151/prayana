<?php
$host = "localhost"; // Hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "regdb"; // Database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
