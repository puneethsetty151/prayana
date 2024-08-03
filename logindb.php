<?php
include 'db_connect.php'; // Include your database connection file

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query to fetch the user by email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if ($password === $user['password']) {
            // Password is correct, redirect to index.php or wherever you want
            header("Location: index.php");
            exit();
        } else {
            // Password is incorrect
            echo "Invalid password";
        }
    } else {
        // No user with the provided email
        echo "No user with these credentials";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
