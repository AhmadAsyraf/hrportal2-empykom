<?php
// Start session
session_start();

// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $ua_username = $_POST['username'];
    $password = $_POST['password'];

    // Query the user_admin table to check if the provided credentials are valid
    $sql = "SELECT * FROM user_admin WHERE ua_username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ua_username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching record is found
    if ($result->num_rows == 1) {
        // Authentication successful, redirect to the dashboard or perform other actions
        echo "<script>alert('Login successful. Redirecting to dashboard...');</script>";
        // After successful admin login
        $_SESSION["ua_username"] = $ua_username; // Set ua_username to the session variable
        // Redirect to the dashboard page
        echo "<script>window.location = '../model/admin.php';</script>";
        exit();
    } else {
        // Invalid credentials, display error message
        echo "<script>alert('Invalid username or password. Please try again.');</script>";
        echo "<script>window.location = '../model/admin_login.php';</script>";
    }

    // Close statement
    $stmt->close();
}

// Close database connection
$conn->close();
?>
