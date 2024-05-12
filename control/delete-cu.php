<?php
// Include your database connection file
include('../dbconn.php');

// Check if ua_id is provided in the URL
if (isset($_GET['cu_id'])) {
    $ua_id = $_GET['cu_id'];

    // Prepare and bind SQL statement to delete data from the table
    $stmt = $conn->prepare("DELETE FROM contact_us WHERE cu_id = ?");
    $stmt->bind_param("i", $ua_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Data deleted successfully
        echo "<script>alert('Admin user deleted successfully.');</script>";
        // Redirect to the admin list page
        echo "<script>window.location = '../model/update_contact_us.php';</script>";
        exit();
    } else {
        // Error occurred while deleting data
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "ID not provided.";
}

// Close database connection
$conn->close();
?>
