<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if sl_id is provided
    if (isset($_POST['sl_id'])) {
        // Retrieve form data
        $sl_id = $_POST['sl_id'];
        $staff_id = $_POST['staff_id'];
        $sl_title = $_POST['sl_title']; // Added to retrieve sl_title from form data

        // Initialize $sl_doc
        $sl_doc = '';

        // Check if a file is uploaded
        if(isset($_FILES['sl_doc']) && $_FILES['sl_doc']['error'] === UPLOAD_ERR_OK) {
            // Retrieve file name
            $file_name = $_FILES['sl_doc']['name'];
            // Temporarily store the file
            $tmp_name = $_FILES['sl_doc']['tmp_name'];
            // Move the uploaded file to the desired location
            move_uploaded_file($tmp_name, "../uploads/" . $file_name);
            // Set $sl_doc to the uploaded file name
            $sl_doc = $file_name;
        } else {
            // No file uploaded, retain the existing value of sl_doc
            // Retrieve the existing sl_doc value from the database
            $sql = "SELECT sl_doc FROM slider WHERE sl_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $sl_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $sl_doc = $row['sl_doc'];
        }

        // Prepare and bind SQL statement to update data in the table
        $stmt = $conn->prepare("UPDATE slider SET staff_id = ?, sl_title = ?, sl_doc = ? WHERE sl_id = ?");
        $stmt->bind_param("sssi", $staff_id, $sl_title,  $sl_doc,  $sl_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Data updated successfully
            echo "<script>alert('Banner updated successfully.');</script>";
            // Redirect to the banner list page
            echo "<script>window.location = '../model/update_slider.php';</script>";
            exit();
        } else {
            // Error occurred while updating data
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Banner ID not provided.";
    }
} else {
    // If form is not submitted, display an error message
    echo "Form submission error!";
}

// Close database connection
$conn->close();
?>
