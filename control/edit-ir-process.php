<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if ir_id is provided
    if (isset($_POST['ir_id'])) {
        // Retrieve form data
        $ir_id = $_POST['ir_id'];
        $staff_id = $_POST['staff_id'];
        $ir_title = $_POST['ir_title'];
        $ir_year = $_POST['ir_year'];
        // Note: You may need to handle file upload separately

        // Prepare and bind SQL statement to update data in the table
        $stmt = $conn->prepare("UPDATE buletin_ir SET staff_id = ?, ir_title = ?, ir_year = ? WHERE ir_id = ?");
        $stmt->bind_param("sssi", $staff_id, $ir_title, $ir_year, $ir_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Data updated successfully
            echo "<script>alert('Activity updated successfully.');</script>";
            // Redirect to the activity list page
            echo "<script>window.location = '../model/update_buletinIR.php';</script>";
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
