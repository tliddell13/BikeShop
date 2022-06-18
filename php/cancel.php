<?php

    /*You can cancel your appointments if you change your mind
    */
    if(!isset($_SESSION)) {
        session_start(); // start the session if there isn't one
    }

    $conn = new mysqli('smcse-stuproj00.city.ac.uk','adbt150','200022518','adbt150');
    if ($db->connect_errno) {
        printf("Connection failed: %s\n", $db->connect_error);
        exit();
    } else {
        $username = $_SESSION['username'];
        
        mysqli_query($conn, "UPDATE bikeShopUsers SET appointment = 'null' WHERE username = '$username' ")
                
        or die(mysqli_error($conn)); // die if theres an error

            // redirect them to home menu
            echo "<script language='javascript'>
                    alert('Appointment Canceled!')
                    window.location.href = '../index.php';
                    </script>";
    }
?>