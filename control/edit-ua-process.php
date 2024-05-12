<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if ua_id is provided
    if (isset($_POST['ua_id'])) {
        // Retrieve form data
        $ua_id = $_POST['ua_id'];
        $ua_username = $_POST['ua_username'];
        $ua_pass_id = $_POST['ua_pass_id'];
        $password = $_POST['password'];

        // Prepare and bind SQL statement to update data in the table
        $stmt = $conn->prepare("UPDATE user_admin SET ua_username = ?, ua_pass_id = ?, password = ? WHERE ua_id = ?");
        $stmt->bind_param("sssi", $ua_username, $ua_pass_id, $password, $ua_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Data updated successfully
            echo "<script>alert('Admin user updated successfully.');</script>";
            // Redirect to the admin list page
            echo "<script>window.location = '../model/update_user_admin.php';</script>";
            exit();
        } else {
            // Error occurred while updating data
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Admin ID not provided.";
    }
} else {
    // If form is not submitted, display an error message
    echo "Form submission error!";
}

// Close database connection
$conn->close();
?>
