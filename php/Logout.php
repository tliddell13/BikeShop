

<?php

/*
for this logout functionality I used the one from class
        *Title: PHP Arrays & Super Globals
        *Author: Dr. Alena Denisova
        *Date: 2021
        *Availability: https://moodle.city.ac.uk/pluginfile.php/2267089/mod_resource/content/1/Session%2008%20-%20Advanced%20PHP.pdf
*/
    session_start();
    unset($_SESSION['username']); // disable the username session

    // end the session
    session_destroy();
    echo "<script language='javascript'>
                    alert('You have been logged out');
                    window.location.href = '../index.php';
                  </script>";
            
?>