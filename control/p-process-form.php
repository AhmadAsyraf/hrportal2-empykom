<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (
        isset($_POST["p_title"]) &&
        isset($_POST["p_description"]) &&
        isset($_POST["p_category"]) &&
        isset($_POST["po_id"]) &&
        isset($_POST["p_polisi"]) &&
        isset($_POST["p_date"])
    ) {
        // Retrieve form data
        $p_title = $_POST["p_title"];
        $p_description = $_POST["p_description"];
        $p_category = $_POST["p_category"];
        $po_ids = $_POST["po_id"]; // Array of po_id values
        $p_polisi = $_POST["p_polisi"];
        $p_date = $_POST["p_date"];

        // Prepare and bind SQL statement to insert data into the table
        $stmt = $conn->prepare("INSERT INTO policy (p_title, p_description, p_category, po_id, p_polisi, p_date) VALUES (?, ?, ?, ?, ?, ?)");

        // Check if the statement is prepared successfully
        if ($stmt) {
            // Loop through each selected po_id
            foreach ($po_ids as $po_id) {
                // Bind parameters to the prepared statement
                $stmt->bind_param("ssssss", $p_title, $p_description, $p_category, $po_id, $p_polisi, $p_date);

                // Execute the statement
                if ($stmt->execute()) {
                    // Data inserted successfully
                    echo "<script>alert('Policy HR data saved successfully.');</script>";
                } else {
                    // Error occurred while executing the statement
                    echo "Error executing statement: " . $stmt->error;
                }
            }

            // Close statement
            $stmt->close();

            // Redirect to the same page after processing the form
            echo "<script>window.location = '../model/update_polisiHR.php';</script>";
            exit();
        } else {
            // Error preparing the statement
            echo "Error preparing statement: " . $conn->error;
        }
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
