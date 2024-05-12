<?php
// Include the database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST["po_title"]) && isset($_POST["po_gred"])) {
        // Retrieve form data
        $po_title = $_POST["po_title"];
        $po_gred = $_POST["po_gred"];

        // Prepare and bind SQL statement to insert data into the table
        $stmt = $conn->prepare("INSERT INTO position_ (po_title, po_gred) VALUES (?, ?)");
        $stmt->bind_param("ss", $po_title, $po_gred);

        // Execute the statement
        if ($stmt->execute()) {
            // Data inserted successfully
            echo "<script>alert('Position data saved successfully.');</script>";
            // Redirect to update_position.php
            echo "<script>window.location = '../model/update_position.php';</script>";
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
