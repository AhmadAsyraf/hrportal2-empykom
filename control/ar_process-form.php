<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if ar_id is provided
    if (isset($_POST['ar_id'])) {
        // Retrieve form data
        $ar_id = $_POST['ar_id'];
        $ar_title = $_POST['ar_title'];
        $ar_date = $_POST['ar_date'];
        $ar_doc = $_POST['ar_doc'];
        // Note: You may need to handle file upload separately

        // Prepare and bind SQL statement to update data in the table
        $stmt = $conn->prepare("UPDATE artikel SET ar_title = ?, ar_date = ?, ar_doc = ? WHERE ar_id = ?");
        $stmt->bind_param("sssi", $ar_title, $ar_date, $ar_doc, $ar_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Data updated successfully
            echo "<script>alert('Article updated successfully.');</script>";
            // Redirect to the article list page
            echo "<script>window.location = '../model/update_artikel.php';</script>";
            exit();
        } else {
            // Error occurred while updating data
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Article ID not provided.";
    }
} else {
    // If form is not submitted, display an error message
    echo "Form submission error!";
}

// Close database connection
$conn->close();
?>
