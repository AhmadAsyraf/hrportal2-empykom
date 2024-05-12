<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if br_id is provided
    if (isset($_POST['br_id'])) {
        // Retrieve form data
        $br_id = $_POST['br_id'];
        $staff_id = $_POST['staff_id'];
        $br_title = $_POST['br_title'];
        $br_date = $_POST['br_date'];

        // Retrieve existing br_doc value
        $sql = "SELECT br_doc FROM brules WHERE br_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $br_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $existing_br_doc = $row['br_doc'];

        // Check if a file is uploaded
        if(isset($_FILES['br_doc']) && $_FILES['br_doc']['error'] === UPLOAD_ERR_OK) {
            // Retrieve file name
            $file_name = $_FILES['br_doc']['name'];
            // Temporarily store the file
            $tmp_name = $_FILES['br_doc']['tmp_name'];
            // Move the uploaded file to the desired location
            if(move_uploaded_file($tmp_name, "../uploads/" . $file_name)) {
                // Set $br_doc to the uploaded file name
                $br_doc = $file_name;
            } else {
                echo "Error occurred while uploading the file.";
                exit();
            }
        } else {
            // If no new file is uploaded, retain the existing br_doc value
            $br_doc = $existing_br_doc;
        }

        // Prepare and bind SQL statement to update data in the table
        $stmt = $conn->prepare("UPDATE brules SET staff_id = ?, br_title = ?, br_doc = ?, br_date = ? WHERE br_id = ?");
        $stmt->bind_param("ssssi", $staff_id, $br_title,   $br_doc, $br_date, $br_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Data updated successfully
            echo "<script>alert('Article updated successfully.');</script>";
            // Redirect to the article list page
            echo "<script>window.location = '../model/update_brules.php';</script>";
            exit();
        } else {
            // Error occurred while updating data
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo " ID not provided.";
    }
} else {
    // If form is not submitted, display an error message
    echo "Form submission error!";
}

// Close database connection
$conn->close();
?>
