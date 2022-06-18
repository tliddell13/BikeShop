<!DOCTYPE html>
<?php
/*
for this login functionality I used the one from class
        *Title: PHP Arrays & Super Globals
        *Author: Dr. Alena Denisova
        *Date: 2021
        *Availability: https://moodle.city.ac.uk/pluginfile.php/2267089/mod_resource/content/1/Session%2008%20-%20Advanced%20PHP.pdf
        
I also added encryption functionallity for more security so the process is differe
*/
    if(!isset($_SESSION)) {
        session_start(); // start the session if it still does not exist
    }

   // connect to the database
	$conn = new mysqli('smcse-stuproj00.city.ac.uk','adbt150','200022518','adbt150');
    if ($db->connect_errno) {
        printf("Connection failed: %s\n", $db->connect_error);
        exit();
    } else {
        // declare variables containing values from the input fields of the login form
        //the values come from the *name* attributes of the input fields
        $userLogin = $_POST['username'];
        $userPass = $_POST['password'];

        // select the password field that matches username
        $query = "SELECT pword FROM bikeShopUsers WHERE username = '$userLogin'";
        // execute the query
        $result = $conn->query($query);
        // store the results in $row variable
        $row = mysqli_fetch_row($result);
        //use verify to check against the encrypted password
        $verify = password_verify($userPass,$row[0]);

        // if $row returned no results from the query make javascript alert that username doesn't exist
        if (!isset($row[0])) {
            // this will alert the user and then redirect to the specified page (Change the URL)
            echo "<script language='javascript'>
                    alert('Username does not exist.');
                    window.location.href = '../BikeShopLogin.html';
                  </script>";
        }
        /* if there is a match in usernames then activate a custom session called 'username' if the password was 
        successfully verified after the encryption process. this will also change the the
        navbar to contian logout, and allow you to view any repair appointments you have*/
        else if ($verify) {
            $_SESSION['username'] = $userLogin;
            /*send a javascript notification that you are logged in when login is successful*/
            echo "<script language='javascript'>
                    var loggedIn = true;
                    alert('You are logged in');
                    window.location.href = '../index.php';
                  </script>";
        } else {
            /*if your passsord is unverified you receive a javascript notification that you gave the wrong password*/
            echo "<script language='javascript'>
                    alert('Invalid password');
                    window.location.href = '../BikeShopLogin.html';
                  </script>";
        }
    }
?>