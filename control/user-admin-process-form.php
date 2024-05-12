<?php
// Include your database connection file
include('../dbconn.php');

// Initialize an array to store missing fields
$missing_fields = array();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST["ua_username"]) && isset($_POST["ua_pass_id"]) && isset($_POST["password"]) && isset($_POST["staff_id"])) {
        // Retrieve form data
        $ua_username = $_POST["ua_username"];
        $ua_pass_id = $_POST["ua_pass_id"]; // Pad with leading zeros
        $staff_password = $_POST["password"];
        $staff_id = $_POST["staff_id"];

        // Check if the staff has authorization to add new admin user
        if ($staff_id != 1) {
            // If staff_id is not 1, display an alert message and redirect back to the page
            echo "<script>alert('You doesnt have authorization to add new admin user.');</script>";
            echo "<script>window.location = '../model/update_user_admin.php';</script>";
            exit(); // Stop further execution
        }

        // Prepare and bind SQL statement to insert data into the table
        $stmt = $conn->prepare("INSERT INTO user_admin (ua_username, ua_pass_id, password, staff_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $ua_username, $ua_pass_id, $staff_password, $staff_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Data inserted successfully
            echo "<script>alert('User data saved successfully.');</script>";
            // Redirect to the same page
            echo "<script>window.location = '../model/update_user_admin.php';</script>";
            exit();
        } else {
            // Error occurred while inserting data
            echo "Error: " . $stmt->error;
        }

        // Close statement  
        $stmt->close();
    } else {
        // Check which fields are missing and add them to the missing_fields array
        if (!isset($_POST["ua_username"])) {
            $missing_fields[] = "Username";
        }
        if (!isset($_POST["ua_pass_id"])) {
            $missing_fields[] = "Staff ID";
        }
        if (!isset($_POST["password"])) {
            $missing_fields[] = "Password";
        }
        if (!isset($_POST["staff_id"])) {
            $missing_fields[] = "Admin ID";
        }

        // Display a message indicating the missing fields
        echo "Please fill in the following fields: " . implode(", ", $missing_fields);
    }
} else {
    // If form is not submitted, display an error message
    echo "Form submission error!";
}

// Close database connection
$conn->close();
?>
