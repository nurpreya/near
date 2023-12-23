<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css" />
    <title>Near Care</title>
</head>

<body>
    <div class="container" id="container">
        <nav class="navbar">
            <div class="head">
                <a href="index.php">
                    <div id="circle"></div>
                    <img src="../images/+.png" id="logo">
                    <span id="cn">Near Care</span>
                </a>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
         
    <ul class="nav-links" id="nav-links">
        <li><a href="index.php" id="home">Home</a></li>
        <li><a href="hospitals.php">Hospitals</a></li>
        <li><a href="confirmation.php">Confirmation</a></li>
        <li><a href="receipt.php">Receipt</a></li>
        <?php
// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    echo '<li id="log"><a href="logout.php">Sign Out</a></li>';
} else {
    echo '<li id="log"><a href="signin.php">Sign In</a></li>';
}
?>
        <li id="sign"><a href="signup.php">Sign up</a></li>
        </nav>
        <div class="front">
            <div class="header">
                <h1><span>Technology for a</span> Healthier Tomorrow</h1>
                <p>
                    Save time and reduce stress by easily scheduling appointments with
                    doctors, ambulance services, and hospital beds from the comfort of
                    your own home.
                </p>
                <button id="scrollToNextSectionButton">Visit</button>
            </div>
            <img src="../images/medical.png" id="medical1" />
        </div>
    </div>
    <div>
        <div class="boxy" id="box7">
            <img src="../images/icons8-list-100.png">
            <p>24 Hours Service</p>
            <h4>Online Bed Booking</h4>
            <button id="bb" onclick="window.location.href='booked.php ';">Book a Bed</button>
        </div>
        <div class="boxy" id="box7">
            <img src="../images/icons8-logo-32.png">
            <p>24 Hours Service</p>
            <h4>Emergency Care</h4>
            <button id="bb">+0934018855</button>
        </div>
        <div class="boxy" id="box7">
            <img src="../images/icons8-search-64.png">
            <p>Search</p>
            <h4>Find Hospital</h4>
            <button id="bb"><a href="map.html">Location</a></button>
        </div>
    </div>

    <div class="snd_page" id="nextSection">
        <div class="about">
            <h1>About us</h1>
            <p>We re dedicated to providing personalized
                care that meets your unique needs
                provide a wide range of services, from
                daily living assistance to specialized
                medical care. Contact us today to learn
                more about how we can support you and
                your loved ones.</p>
        </div>
        <img src="../images/medical2.png" id="about_img">
    </div>

    <div class="thrd_page">
        <img src="../images/medical-3.png" id="info_img">
        <div class="info">
            <h1>Information</h1>
            <p>Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem
                Ipsum has been the industry s standard
                dummy text ever since the 1500s, when
                an unknown printer took a galley of type
                and scrambled it to make a type
                specimen book. It has survived not only</p>
        </div>
    </div>
    <div class="footer">
        <div class="bxz">
          <div class="boxxz" id="bxz1">
            <h3>Near Care</h3>
            <p>Visit Help Center</p>
          </div>
          <div class="boxxz" id="bxz2">
            <h4>Info</h4>
            <p>About Us</p>
            <p>Blog</p>
            <p>Feedback</p>
          </div>
        </div>
        <div class="boxxz" id="bxz3">
          <h4>Location</h4>
          <p>Dhaka, Bangladesh</p>
    
        </div>
    
        <div class="boxxz" id="bxz4">
          <h4>Hospital Info</h4>
          <p>Area Hospitals</p>
          <p>Bed Information</p>
        </div>
    
        <div class="boxxz" id="bxz5">
          <h4>Emergency</h4>
          <p>Call: +0934018855</p><br>
          <input type="text" placeholder="FeedBack" style="height:40px ;">
        </div>
      </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('menu-toggle');
            const navLinks = document.getElementById('nav-links');
            var container = document.getElementById("container");

            menuToggle.addEventListener('click', function () {
                navLinks.classList.toggle('active');

            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            // Get references to the button and the next section
            var scrollToNextSectionButton = document.getElementById("scrollToNextSectionButton");
            var nextSection = document.getElementById("nextSection");


            // Add a click event listener to the button
            scrollToNextSectionButton.addEventListener("click", function () {
                // Use the scrollIntoView method to scroll to the next section
                nextSection.scrollIntoView({ behavior: "smooth" });
            });
        });

    </script>
</body>

</html> 