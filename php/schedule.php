<?php
    //I mostly made this up after seeing how sign up and login worked
    if(!isset($_SESSION)) {
        session_start(); // start the session 
    }

    $conn = new mysqli('smcse-stuproj00.city.ac.uk','adbt150','200022518','adbt150');
    if ($db->connect_errno) {
        printf("Connection failed: %s\n", $db->connect_error);
        exit();
    } else {
        //grab the values 
        $username = $_SESSION['username'];
        $appointment = $_POST['appointmentTime'];
        
        mysqli_query($conn, "UPDATE bikeShopUsers SET appointment = '$appointment' WHERE username = '$username' ")
                
        or die(mysqli_error($conn)); // cancel if there is an error

            // after appointmnet is set send them to home
            echo "<script language='javascript'>
                    alert('Appointment Scheduled!')
                    window.location.href = '../index.php';
                    </script>";
    }
?>