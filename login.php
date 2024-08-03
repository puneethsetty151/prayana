<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 400px;
            padding: 40px;
            margin-top:200px;
            margin-left:500px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .container form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .container form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .container form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .container form .or-line {
            text-align: center;
            margin-bottom: 20px;
        }

        .container form .or-line:before,
        .container form .or-line:after {
            content: "";
            display: inline-block;
            width: 40%;
            height: 1px;
            background-color: #ccc;
            vertical-align: middle;
        }

        .container form .or-line:before {
            margin-right: 10px;
        }

        .container form .or-line:after {
            margin-left: 10px;
        }

        .container form .social-buttons {
            text-align: center;
        }

        .container form .social-buttons button {
            padding: 10px 30px;
            margin-right: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .container form .social-buttons button.google {
            background-color: #db4437;
            color: #fff;
        }

        .container form .social-buttons button.facebook {
            background-color: #3b5998;
            color: #fff;
        }

        .container form .sign-up {
            text-align: center;
            margin-top: 20px;
        }

        .container form .sign-up a {
            color: #007bff;
            text-decoration: none;
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
        <h1>Welcome to Prayana</h1>
        <form action="logindb.php" method="POST">
        
        
        <input type="text" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="submit" value="Continue"><br>

            <div class="or-line">
                <span>Or</span>
            </div>

            <div class="social-buttons">
                <button type="button" class="google">Continue with Google</button>
                <button type="button" class="facebook">Continue with Facebook</button>
            </div>

            <div class="sign-up">
                <a href="SignUp.php">Sign Up</a> if you're a new user
            </div>
        </form>
    </div>
        </div>
    </div>

</body>
</html>
