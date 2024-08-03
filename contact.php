<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" href="./assets/files/prayana.png">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body class="contactbody">
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

    <section class="contact">
        <h1>Contact <span>Us</span></h1>
        <hr>
        <p>We value your feedback, inquiries, and suggestions, and we're excited to hear from you. Whether you have
            a question about our products or services, need assistance with an order, or simply want to share your
            thoughts, this is the place to reach out to us..</p>
        <div class="contact-form">

            <form action="contact_process.php" method="POST">
                <input type="text" name="name" placeholder="Enter Name" required>
                <input type="email" name="email" placeholder="Enter E-mail" required>
                <input type="text" name="phone" placeholder="Enter Phone number" required>
                <input type="text" name="subject" placeholder="What brings you here?" required>
                <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <input type="submit" value="Submit" ONCLICK="alert('Thank you! \nYour response was submitted')" class="submit-btn">
            </form>
        </div>

    </section>


    <section class="footer">
        <div class="foot">
            <div class="footer-content">

                <div class="footlinks">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="./booking.php">Register</a></li>
                        <li><a href="./info.php">About Us</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footlinks">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="https://www.facebook.com/" target="_blank"><i
                                class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/prayana_travel/" target="_blank"><i
                                class='bx bxl-instagram'></i></a>
                        <a href="https://twitter.com/" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="https://www.linkedin.com/in/yadiki-venkata-puneeth-setty-954a15233/" target="_blank"><i
                                class='bx bxl-linkedin'></i></a>
                        <a href="https://github.com/puneethsetty151/" target="_blank"><i class='bx bxl-github'></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="end">
            <p>Copyright © 2024 Prayana All Rights Reserved.<br>Website developed by: Prayana</p>
        </div>
    </section>

</body>

</html>