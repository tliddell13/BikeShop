<!DOCTYPE html>
<!--
The link to my website is:
https://smcse.city.ac.uk/student/adbt150/BikeShop/index.php
-->
<?php
    if(!isset($_SESSION)) {
        session_start(); // start the session if it still does not exist
    }
?>
<html lang="en">
<head>
    <title>Phoenix Bicycles</title>
    <link rel="stylesheet" href="css/BikeShop.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap"><!--google font I used-->
    <script src="https://kit.fontawesome.com/01a6745e6d.js" crossorigin="anonymous"></script><!--various logos I used-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--makes content mobile friendly-->
</head>
<body>
<!-- Used the same navbar on all my pages. And cited and commented the content here in the index file It has a dropdown menu to see bikes and a dropdown menu to see your account.if you are logged in already it uses php to replace to account button with a logout button. 
-->
<nav>
    <!--
        Adapted my top nav from w3schools tutorial
        *Title: How TO - Top Navigation
        *Author: w3Schools.com
        *Date: 2021
        *Availability: https://www.w3schools.com/howto/howto_js_topnav.asp
    -->
    <div class="navbar" id="topnav">
        <div class="name">
            <img src="images/PhoenixLogo.png"><!--The company logo-->
            <a href="index.php">Phoenix</a><!--The company header name, which also acts as a home button-->
        </div>
        <div class="center" id="center"><!--The parts of the navbar that I keep at the center-->
        <div class="bikesDropdown">
    <!--
        Adapted dropdown from w3schools tutorial
        *Title: How TO - Dropdown Navbar
        *Author: w3Schools.com
        *Date: 2021
        *Availability: https://www.w3schools.com/howto/howto_css_dropdown_navbar.asp
     -->
            <button class="dropbtn" onclick="bikesDropdown()">Bikes</button>
                <div class="bikesDropdown-content" id="bikesDropdown">
                    <!--These pages I was unable to finish, but plan on finishing when I add the site to my portfolio-->
                    <a href="mountainBikes.html">Mountain</a>
                    <a href="roadBikes.html">Road</a>
                    <a href="hybridBikes.html">Hybrid</a>
                    <a href="equipment.html">Equipment</a>
                </div> 
        </div>
            <a href="php/BikeShopAbout.php">About</a>
            <a href="php/Repair.php">Repairs</a>
        </div>
        <div class="accountDropdown" id="account">
            <a href="php/ContactUs.php">Contact us</a>
            <!-- came up with this with use of documentation, I used php to check if you are logged in and 
        pick which content to display based on the login status-->
            <?php if(!isset($_SESSION['username'])) {
            echo "<button class='dropbtn' onclick='accountDropdown()'><i class='fa fa-fw fa-user'></i>Account</button>
                <div class='accountDropdown-content' id='accountDropdown'>
                    <a href='BikeShopLogin.html'>Login</a>
                    <a href='BikeShopSignUp.html'>Sign up</a>
                    </div>";
                } else {
                    echo "<a href='php/Logout.php'>Log Out</a>";
                }
            ?>
        </div> 
        <!--
        I used a w3schools tutorial to make my dropdown mobile friendly
        *Title: How TO - Responsive Top Navigation
        *Author: w3Schools.com
        *Date: 2021
        *Availability: https://www.w3schools.com/howto/howto_js_topnav_responsive.asp
        -->
        <a href="javascript:void(0);" class="icon" onclick="mobile()">
        <i class="fa fa-bars"></i><!--menu bars-->
        </a>
    </div>
</nav>
<main>
        <!--
        I used a w3schools tutorial for all my hero images in this page about.php, repair.php, and contactUs.php
        *Title: How TO - Hero Image
        *Author: w3Schools.com
        *Date: 2021
        *Availability: https://www.w3schools.com/howto/howto_css_hero_image.asp
        -->
    <div class="hero-image">
        <div class="hero-text">
            <h1>Phoenix Bicycles</h1>
            <h2>The raddest bike shop in Colorodo</h2>
        </div>
    </div>
</main>
    <footer>
        <hr>
        <!-- 
        The footer is the same in all my pages, and I will cite the content here.
        I used a w3schools tutorial for social media links
        *Title: How TO - Social Media Buttons
        *Author: w3Schools.com
        *Date: 2021
        *Availability: https://www.w3schools.com/howto/howto_css_social_media_buttons.asp
        -->
        <div class="social">
            <p>Follow us on Social Media!</p>
            <a href ="https://www.facebook.com/" class="fa fa-facebook"></a>
            <a href ="https://www.instagram.com/" class="fa fa-instagram"></a>
            <a href ="https://www.twitter.com/" class="fa fa-twitter"></a>
        </div>
        <p><em>Copyright &copy; 2021 Phoenix Bicycle Corporation</em></p>
        <p>DISCLAIMER:
Phoenix Bicycles is a fictitious brand created solely for the purpose of the
assessment of IN1010 module at City, University of London, UK. All products and
people associated with Phoenix Bicycles are also fictitious. Any resemblance to real
brands, products, or people is purely coincidental. Information provided about the
product is also fictitious and should not be construed to be representative of actual
products on the market in a similar product category.</p>
    </footer>
<script src="javascript/BikeShop.js"></script>
</body>
</html>