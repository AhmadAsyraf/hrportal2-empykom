<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST["staff_name"]) && isset($_POST["staff_pass_id"]) && isset($_POST["po_id"]) && isset($_POST["password"])) {
        // Retrieve form data
        $staff_name = $_POST["staff_name"];
        $staff_pass_id = str_pad($_POST["staff_pass_id"], 6, '0', STR_PAD_LEFT); // Pad with leading zeros
        $po_id = $_POST["po_id"];
        $staff_password = $_POST["password"];

        // Prepare and bind SQL statement to insert data into the table
        $stmt = $conn->prepare("INSERT INTO staff (staff_name, staff_pass_id, po_id, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siis", $staff_name, $staff_pass_id, $po_id, $staff_password);

        // Execute the statement
        if ($stmt->execute()) {
            // Data inserted successfully
            echo "<script>alert('User data saved successfully.');</script>";
            // Redirect to the same page
            echo "<script>window.location = '../model/update_user.php';</script>";
            exit();
        } else {
            // Error occurred while inserting data
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        // If required fields are not filled, display an error message
        echo "All fields are required!";
    }
} else {
    // If form is not submitted, display an error message
    echo "Form submission error!";
}

// Close database connection
$conn->close();
?>
