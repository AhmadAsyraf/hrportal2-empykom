<?php
// Include your database connection file
include('../dbconn.php');

// Check if ua_id is provided in the URL
if (isset($_GET['bk_id'])) {
    $bk_id = $_GET['bk_id'];

    // Prepare and bind SQL statement to delete data from the table
    $stmt = $conn->prepare("DELETE FROM bank WHERE bk_id = ?");
    $stmt->bind_param("i", $bk_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Data deleted successfully
        echo "<script>alert('The item has been successfully deleted..');</script>";
        // Redirect to the admin list page
        echo "<script>window.location = '../model/update_bank.php';</script>";
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
