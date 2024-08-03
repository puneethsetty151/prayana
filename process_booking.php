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
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$accomodation_type = $_POST['accomodation_type'];
$no_of_rooms = $_POST['no_of_rooms'];
$room_type = $_POST['room_type'];
$addl_requests = $_POST['addl_requests'];

// Check if the user exists in the users table
$sql_check_user = "SELECT * FROM users WHERE email = '$email'";
$result_check_user = mysqli_query($conn, $sql_check_user);

if (mysqli_num_rows($result_check_user) > 0) {
    // User exists, retrieve first_name and last_name
    $row = mysqli_fetch_assoc($result_check_user);
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];

    // Insert booking information into the bookings table
    $sql_insert_booking = "INSERT INTO bookings (first_name, last_name, email, phone, location, check_in, check_out, accomodation_type, no_of_rooms, room_type, addl_requests)
                           VALUES ('$first_name', '$last_name', '$email', '$phone', '$location', '$check_in', '$check_out', '$accomodation_type', '$no_of_rooms', '$room_type', '$addl_requests')";

    if (mysqli_query($conn, $sql_insert_booking)) {
        echo "Booking submitted successfully.";
    } else {
        echo "Error: " . $sql_insert_booking . "<br>" . mysqli_error($conn);
    }
} else {
    // User does not exist, display message
    echo "You need to sign up first before booking.";
}

// Close connection
mysqli_close($conn);

?>