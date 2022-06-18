<!DOCTYPE html>
<?php
    if(!isset($_SESSION)) {
        session_start(); // start the session if you need to
    }
?>
<html lang="en">
<head>
    <title>Phoenix Bicycles</title>
    <link rel="stylesheet" href="../css/ContactUs.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap">
    <script src="https://kit.fontawesome.com/01a6745e6d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav>
  <div class="navbar">
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
  <a href="Repair.php">Repair</a>
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
                <h2>Contact us</h2>
                <p>We'll be happy to help.<p>
            </div>
            <container class="contact"><!--Our contact info -->
                <p>Email us: fakeEmail@fakemail.com</p>
                <p>Call us: 74950384902</p>
                <p>Visit us: 23453 BikesRock rd. Boulder, Colorodo</p>
            </container>
        </div>
    </main>
    <footer>
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
    <script src="../javascript/Repair.js"></script>
</body>
</html>