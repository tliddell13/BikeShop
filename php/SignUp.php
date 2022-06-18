<!DOCTYPE html>
<?php 

/*  My sign in functionality is very similar to the one implemented in class with the exception of encrypting the password    


        *Title: PHP Arrays & Super Globals
        *Author: Dr. Alena Denisova
        *Date: 2021
        *Availability: https://moodle.city.ac.uk/pluginfile.php/2267089/mod_resource/content/1/Session%2008%20-%20Advanced%20PHP.pdf
*/
    if(!isset($_SESSION)) {
        session_start();//start a session
    }

    //connecting to the database
    $conn = new mysqli('smcse-stuproj00.city.ac.uk','adbt150','200022518','adbt150');
    if ($db->connect_errno) {
        printf("Connection failed: %s\n", $db->connect_error); //leths you know if the connection failed
        exit();
    } else {
        /* These are the variables that the user enters when signing up.
        Post is more secure than get
        */
        $username = $_POST['username'];
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $mobile = $_POST['number'];
        $email = $_POST['email'];
        $dob = $_POST['birth'];
        $password = $_POST['password'];

        //make sure username doesn't already exist
        $query_username = "SELECT username FROM bikeShopUsers WHERE username = '$username'";
        // execute the query
        $res_username = mysqli_query($conn, $query_username);
        
        //make sure the email doesn't exist
        $query_email = "SELECT email FROM bikeShopUsers WHERE email = '$email'";
        // execute the query
        $res_email = mysqli_query($conn, $query_email);

        // if the username already exists let them know and send them back to sign u[]
        if (mysqli_num_rows($res_username) > 0) {
            echo "<script language='javascript'>
                    alert('Username already taken. Please choose another.');
                    window.location.href = '../BikeShopSignUp.html';
                    </script>";
        } 
        //if the email already exists see if they want to sign in
        else if (mysqli_num_rows($res_email) > 0) {
            echo "<script language='javascript'>
                    alert('Email already in use. Please login.');
                    window.location.href = '../BikeShopLogin.html';
                    </script>";
        }
        // if the username does not exist then...
        else {
            //encrypt the password
            $password_encrypt = password_hash($password,PASSWORD_DEFAULT);
            // insert values from the input fields to the database
            //username, fName, lName, mobile, email, password = names of columns you created in your database
            mysqli_query($conn, "INSERT INTO bikeShopUsers(username, first_Name, last_Name, email, birth, phone_number,pword)
            VALUES ('$username', '$firstName', '$lastName', '$email','$dob', '$mobile', '$password_encrypt')")
                
            or die(mysqli_error($conn)); // cancel if there is an error DIE!

            // Successful registration now login bro!
            echo "<script language='javascript'>
                    alert('Registered successfully!')
                    window.location.href = '../BikeShopLogin.html';
                    </script>";
        }
    }
?>