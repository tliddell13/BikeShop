<!DOCTYPE html>
<?php
    if(!isset($_SESSION)) {
        session_start(); // start the session if it still does not exist
    }
?>
<html lang="en">
<head>
    <title>Phoenix Bicycles</title>
    <link rel="stylesheet" href="../css/BikeShopAbout.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap">
    <script src="https://kit.fontawesome.com/01a6745e6d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav>
<div class="navbar" id="topnav">
    <div class="name">
        <img src="../images/PhoenixLogo.png">
        <a href="../index.php">Phoenix</a>
    </div>
  <div class="center" id="center">
  <div class="bikesDropdown">
  <button class="dropbtn" onclick="bikesDropdown()">Bikes</button>
        <div class="bikesDropdown-content" id="bikesDropdown">
            <a href="../mountainBikes.html">Mountain</a>
            <a href="../roadBikes.html">Road</a>
            <a href="../hybridBikes.html">Hybrid</a>
            <a href="../equipment.html">Equipment</a>
        </div> 
    </div>
  <a href="BikeShopAbout.php">About</a>
  <a href="Repair.php">Repairs</a>
  </div>
  <div class="accountDropdown" id="account">
    <a href="ContactUs.php">Contact us</a>
    <?php if(!isset($_SESSION['username'])) {
    echo "<button class='dropbtn' onclick='accountDropdown()'><i class='fa fa-fw fa-user'></i>Account</button>
       
    <div class='accountDropdown-content' id='accountDropdown'>
        <a href='../BikeShopLogin.html'>Login</a>
        <a href='../BikeShopSignUp.html'>Sign up</a>
    </div>";
    } else {
    echo "<a href='Logout.php'>Log Out</a>";
    }
        ?>
  </div>
    <a href="javascript:void(0);" class="icon" onclick="mobile()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</nav>
<main>
    <div class="hero-image">
        <div class="hero-text">
            <h2>Get the service you deserve</h2>
            <p>At Phoenix Bicycles our goal is to find you the perfect bike, and offer high quality repair and customization<p>
        </div>
    </div>
        <div class="about">
            <img src="../images/GuyOnBike.jpg">
            
            <!-- 
        Thank you Zoltan for the dope image
        *Title: N/A
        *Author: Zoltan Tasi
        *Date: 2021
        *Availability: https://unsplash.com/photos/VfUN94cUy4o?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink
            -->
            <h2>How it started...</h2>
            <p>Before being founded in 1980 Working on bikes started out as a hobby for our founder Todd Clint. He was always creating custom bikes meant to fit his specific needs in his free time. He then started doing work and projects for his friends and his hobby quickly grew into a very successful business that delivers high quality repairs, customizations, and sales to the town of Boulder, Colorodo.
            </p>
        </div>
    <br>
    <div class="hero-image2">
        <div class="hero-text2">
            <h2>Creating more loyal customers every day</h2>
            <p>See and hear from our satisfied customers...<p>
        </div>
    </div>
    <!--
        I used a w3schools tutorial to make my dropdown mobile friendly
        *Title: How TO - Slideshow
        *Author: w3Schools.com
        *Date: 2021
        *Availability: https://www.w3schools.com/howto/howto_js_slideshow.asp
        -->
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numberText">1/3</div>
            <img src="../images/slideshowImage1.jpg" style="width:100%">
             <!-- 
        Thank you Carter Moorse for the dope image
        *Title: N/A
        *Author: Zoltan Tasi
        *Date: 2021
        *Availability: https://unsplash.com/photos/-_AFogMlHJQ?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink
            -->
        <div class="text">This place is Rad! -Rafael</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../images/slideshowImage2.jpg" style="width:100%">
      <!-- 
        Thank you Dmitrii for the dope image
        *Title: N/A
        *Author: Dmitrii Vaccinium
        *Date: 2021
        *Availability: https://unsplash.com/photos/sw9Vozf6j_4?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink
            -->
    <div class="text">I finally have the road bike of my dreams -Marcos</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../images/slideshowImage3.jpg" style="width:100%">
      <!-- 
        Thank you Patrick Hendry for the dope image
        *Title: N/A
        *Author: Dmitrii Vaccinium
        *Date: 2021
        *Availability: https://unsplash.com/photos/sw9Vozf6j_4?utm_source=unsplash&utm_medium=referral&utm_content=creditShareLink
            -->
    <div class="text">Phoenix helped outfit my bike for a beautiful backpacking trip -Clint</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
 <div class="ourGoal">
     <h2>Our goal..</h2>
     <p>At Phoenix we realize all cyclists are different, thats why we make it our goal not to just sell you a bike, but sell you YOUR bike. Thats why we offer bike customization with any sale we make.</p>
</div>
</main>
    <footer>
        <hr>
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
<script src="../javascript/BikeShopAbout.js"></script>
</body>
</html>