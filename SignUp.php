

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAYANA – A TOURISM WEBSITE</title>
    <link rel="icon" href="./assets/files/prayana.png" style="width: 30px;">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            margin-top:100px;
            margin-bottom:100px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            animation: slide-down 0.5s ease-out;
            overflow-y: auto; /* Enable vertical scrolling */
            height:600px;
        }

        @keyframes slide-down {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .container form label {
            display: block;
            margin-bottom: 8px;
        }

        .container form input[type="text"],
        .container form input[type="email"],
        .container form select,
        .container form input[type="date"],
        .container form input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .container form input[type="checkbox"] {
            margin-right: 5px;
            vertical-align: middle;
        }

        .container form .terms {
            margin-bottom: 15px;
        }

        .container form .terms label {
            display: inline-block;
            margin-bottom: 5px;
        }

        .container form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            padding: 10px 20px;
            display: block;
            margin: 0 auto;
        }

        .container form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
            display: none; /* Hide by default */
        }
    </style>
</head>
<body>

    <div class="banner">
        <video src="./assets/files/floating video.mp4" type="video/mp4" autoplay muted loop></video>
        <div class="content" id="home">
            <nav>
                <img src="./assets/files/prayana.png" class="logo" alt="Logo" title="FirstFlight Travels">
                <ul class="navbar">
                    <li>
                    <a href="./index.php">Home</a>
                <a href="./index.php#package">Packages</a>
                <a href="./index.php#locations">Locations</a>
                <a href="./info.php">About Us</a>
                <a href="./contact.php">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="container">
        <h2>Create Your Account</h2>
        <form action="SignUpdb.php" method="POST"  onsubmit="return checkAge()">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="nationality">Nationality:</label>
            <input type="text" id="nationality" name="nationality" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label>
                <input type="checkbox" name="terms_agree" required>
                I agree to the <a href="#">terms and conditions</a>
            </label>



            <input type="submit" value="Agree and Continue">

            <div class="error-message" id="age-error">
                You need to be at least 18 years old to sign up.
            </div>
        </form>
    </div>
    <script>
        function validateDOB() {
            var dobInput = document.getElementById('dob');
            var dobValue = new Date(dobInput.value);
            var now = new Date();
            var age = now.getFullYear() - dobValue.getFullYear();

            if (age < 18) {
                document.getElementById('age-error').style.display = 'block';
            } else {
                document.getElementById('age-error').style.display = 'none';
            }
        }

        function checkAge() {
            var dobValue = new Date(document.getElementById('dob').value);
            var now = new Date();
            var age = now.getFullYear() - dobValue.getFullYear();

            if (age < 18) {
                document.getElementById('age-error').style.display = 'block';
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
    <div>
        <div>

</body>
</html>