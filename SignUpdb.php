<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "regdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$password = $_POST['password'];
$terms_agree = isset($_POST['terms_agree']) ? 1 : 0;

// Insert user data into the database
$sql = "INSERT INTO users (first_name, last_name, gender, nationality, dob, email, password, terms_agree)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, 'sssssssi', $first_name, $last_name, $gender, $nationality, $dob, $email, $password, $terms_agree);
    mysqli_stmt_execute($stmt);
    
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "User registered successfully.";
    } else {
        echo "Error: Unable to register user.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error: Unable to prepare the statement.";
}

// Close connection
mysqli_close($conn);
?>
