<?php
// Include your database connection file
include('../dbconn.php');

// Check if ua_id is provided in the URL
if (isset($_GET['ua_id'])) {
    $ua_id = $_GET['ua_id'];

    // Prepare and bind SQL statement to delete data from the table
    $stmt = $conn->prepare("DELETE FROM user_admin WHERE ua_id = ?");
    $stmt->bind_param("i", $ua_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Data deleted successfully
        echo "<script>alert('Admin user deleted successfully.');</script>";
        // Redirect to the admin list page
        echo "<script>window.location = '../model/update_user_admin.php';</script>";
        exit();
    } else {
        // Error occurred while deleting data
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Admin ID not provided.";
}

// Close database connection
$conn->close();
?>
