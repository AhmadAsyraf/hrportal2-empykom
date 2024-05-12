<?php
// Start the session
session_start();

// Check if the admin is logged in (check if session variables are set)
if (isset($_SESSION["ua_username"])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect the admin to the login page or any other desired page after logout
    header("Location:../model/admin_login.php"); // Replace 'login.php' with the actual login page URL
    exit(); // Make sure to exit after redirecting
} else {
    // Handle case where admin is not logged in (optional)
    echo "You are not logged in!";
    // Redirect to login page or display an error message as needed
}
?>
