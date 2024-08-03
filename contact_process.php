<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "regdb"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare and execute the SQL query to insert data into the contact table
$sql = "INSERT INTO contact (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Message sent successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
