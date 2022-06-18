<!DOCTYPE html>
<?php

/*this is where you can schedule an appointment to get a repair.*/

    if(!isset($_SESSION)) {
        session_start(); //start a session if there isn't one going on 
    }

?>
<html lang="en">
<head>
    <title>Phoenix Bicycles</title>
    <link rel="stylesheet" href="../css/Repair.css">
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
  <a href="/Repair.php">Repairs</a>
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
            <h2>Visit our mechanics</h2>
            <p>You'll be back on the road in no time.<p>
        </div>
    </div>
    <?php
    if(isset($_SESSION['username'])) {
        $conn = new mysqli('smcse-stuproj00.city.ac.uk','adbt150','200022518','adbt150');
    if ($db->connect_errno) {
        printf("Connection failed: %s\n", $db->connect_error);
        exit();
    } else {
        $username = $_SESSION['username'];
        $appointment_query = "SELECT appointment FROM bikeShopUsers WHERE username = '$username'";
        $appointment_time = mysqli_query($conn, $appointment_query);
        while($row= mysqli_fetch_assoc($appointment_time)) {
        $appointment = $row['appointment'];
    }
        
    }   //display the appointment they have if one already exists
        //the cancel appointment will delete the previous appointment from the database
        echo 
        "<form id='appointment' method='POST' action='schedule.php'>
        <h3>Pick a day below to schedule an appointment</h3>
            <p>Days: Sunday - Thursday</p><br>
            <p>Hours: 9 a.m. - 7 p.m.</p><br>
                <input id='appointmentTime' type='datetime-local' name='appointmentTime'>
                <small id='appointmentTag'>Error message</small><br>
            <button type='submit' value='Submit' class='submitbtn'>Submit</button>
        </form>
        <form id='cancel' method='POST' action='cancel.php'>
            <h3>Your appointment:</h3>
            <p>" . $appointment . "</p>
            <button type='cancel' value='Submit' class='submitbtn'>Cancel</button>
        </form>";
    } else {
        //you cant schedule an appointment unless you are logged in
        echo "<h3>Please login to schedule a bike repair</h3>
             <a href='../BikeShopLogin.html'>Login</a><br>";
    }
    ?>
</main>
    <br>
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