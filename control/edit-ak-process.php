<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if ak_id is provided
    if (isset($_POST['ak_id'])) {
        // Retrieve form data
        $ak_id = $_POST['ak_id'];
        $staff_id = $_POST['staff_id'];
        $ak_title = $_POST['ak_title'];
        $ak_year = $_POST['ak_year'];
        // Note: You may need to handle file upload separately

        // Prepare and bind SQL statement to update data in the table
        $stmt = $conn->prepare("UPDATE aktiviti SET staff_id = ?, ak_title = ?, ak_year = ? WHERE ak_id = ?");
        $stmt->bind_param("sssi", $staff_id, $ak_title, $ak_year, $ak_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Data updated successfully
            echo "<script>alert('Activity updated successfully.');</script>";
            // Redirect to the activity list page
            echo "<script>window.location = '../model/update_aktiviti.php';</script>";
            exit();
        } else {
            // Error occurred while updating data
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Activity ID not provided.";
    }
} else {
    // If form is not submitted, display an error message
    echo "Form submission error!";
}

// Close database connection
$conn->close();
?>
