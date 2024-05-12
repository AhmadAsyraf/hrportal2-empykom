<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if cu_id is provided
    if (isset($_POST['cu_id'])) {
        // Retrieve form data
        $cu_id = $_POST['cu_id'];
        $staff_id = $_POST['staff_id'];
        $cu_name = $_POST['cu_name'];
        $cu_dept = $_POST['cu_dept'];
        $cu_sect = $_POST['cu_sect'];
        $cu_position = $_POST['cu_position'];
        $cu_ext = $_POST['cu_ext'];

        // Prepare and bind SQL statement to update data in the table
        $stmt = $conn->prepare("UPDATE contact_us SET staff_id = ?, cu_name = ?, cu_dept = ?, cu_sect = ?, cu_position = ?, cu_ext = ? WHERE cu_id = ?");
        $stmt->bind_param("ssssssi", $staff_id, $cu_name, $cu_dept, $cu_sect, $cu_position, $cu_ext, $cu_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Data updated successfully
            echo "<script>alert('Contact information updated successfully.');</script>";
            // Redirect to the appropriate page
            echo "<script>window.location = '../model/update_contact_us.php';</script>";
            exit();
        } else {
            // Error occurred while updating data
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Contact ID not provided.";
    }
} else {
    // If form is not submitted, display an error message
    echo "Form submission error!";
}

// Close database connection
$conn->close();
?>
