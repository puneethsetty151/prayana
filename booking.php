<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Now...</title>
    <link rel="icon" href="./assets/files/prayana.png" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/booking.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div>
        <nav>
            <img src="./assets/files/prayana.png" class="logo" alt="Logo" title="FirstFlight Travels">
            <ul class="navbar">
                <li>
                    <a href="index.php">Home</a>
                    <a href="./index.php#package">Packages</a>
                    <a href="./index.php#locations">Locations</a>
                    <a href="./info.php">About Us</a>
                    <a href="./contact.php">Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="booking">
        <h1>Booking Online Now</h1>
        <p>Please fill out this form with the required information</p>
        <form action="process_booking.php" method="POST">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="phone" placeholder="Phone" required><br>
    <input type="text" name="location" placeholder="Location" required><br>
    <label for="check_in">Check-In Date:</label>
    <input type="date" id="check_in" name="check_in" required><br>
    <label for="check_out">Check-Out Date:</label>
    <input type="date" id="check_out" name="check_out" required><br>
    <select name="accomodation_type" required>
        <option value="">Select Accomodation Type</option>
        <option value="Hotel">Hotel</option>
        <option value="Resort">Resort</option>
        <option value="Guest House">Guest House</option>
    </select><br>
    <input type="number" name="no_of_rooms" placeholder="Number of Rooms" required><br>
    <select name="room_type" required>
        <option value="">Select Room Type</option>
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Suite">Suite</option>
    </select><br>
    <textarea name="addl_requests" placeholder="Additional Requests"></textarea><br>
    <input type="submit" value="Submit">
</form>


    </div>
       
</body>

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
                    <a href="https://www.instagram.com/prayana_travel/" target="_blank"><i class='bx bxl-instagram'></i></a>
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


<script>
    let calendar = document.querySelector('.calendar')

    const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

    isLeapYear = (year) => {
        return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 === 0)
    }

    getFebDays = (year) => {
        return isLeapYear(year) ? 29 : 28
    }

    generateCalendar = (month, year) => {

        let calendar_days = calendar.querySelector('.calendar-days')
        let calendar_header_year = calendar.querySelector('#year')

        let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

        calendar_days.innerHTML = ''

        let currDate = new Date()
        if (month > 11 || month < 0) month = currDate.getMonth()
        if (!year) year = currDate.getFullYear()

        let curr_month = `${month_names[month]}`
        month_picker.innerHTML = curr_month
        calendar_header_year.innerHTML = year


        let first_day = new Date(year, month, 1)

        for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
            let day = document.createElement('div')
            if (i >= first_day.getDay()) {
                day.classList.add('calendar-day-hover')
                day.innerHTML = i - first_day.getDay() + 1
                day.innerHTML += `<span></span>
                                <span></span>
                                <span></span>
                                <span></span>`
                if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                    day.classList.add('curr-date')
                }
            }
            calendar_days.appendChild(day)
        }
    }

    let month_list = calendar.querySelector('.month-list')

    month_names.forEach((e, index) => {
        let month = document.createElement('div')
        month.innerHTML = `<div data-month="${index}">${e}</div>`
        month.querySelector('div').onclick = () => {
            month_list.classList.remove('show')
            curr_month.value = index
            generateCalendar(index, curr_year.value)
        }
        month_list.appendChild(month)
    })

    let month_picker = calendar.querySelector('#month-picker')

    month_picker.onclick = () => {
        month_list.classList.add('show')
    }

    let currDate = new Date()

    let curr_month = {
        value: currDate.getMonth()
    }
    let curr_year = {
        value: currDate.getFullYear()
    }

    generateCalendar(curr_month.value, curr_year.value)

    document.querySelector('#prev-year').onclick = () => {
        --curr_year.value
        generateCalendar(curr_month.value, curr_year.value)
    }

    document.querySelector('#next-year').onclick = () => {
        ++curr_year.value
        generateCalendar(curr_month.value, curr_year.value)
    }
</script>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>
</body>

</html>
