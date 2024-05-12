<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if or_id is provided
    if (isset($_POST['or_id'])) {
        // Retrieve form data
        $or_id = $_POST['or_id'];
        $staff_id = $_POST['staff_id'];
        $or_title = $_POST['or_title'];
        $or_date = $_POST['or_date'];

        // Retrieve existing or_doc value
        $sql = "SELECT or_doc FROM orga WHERE or_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $or_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $existing_or_doc = $row['or_doc'];

        // Check if a file is uploaded
        if(isset($_FILES['or_doc']) && $_FILES['or_doc']['error'] === UPLOAD_ERR_OK) {
            // Retrieve file name
            $file_name = $_FILES['or_doc']['name'];
            // Temporarily store the file
            $tmp_name = $_FILES['or_doc']['tmp_name'];
            // Move the uploaded file to the desired location
            if(move_uploaded_file($tmp_name, "../uploads/" . $file_name)) {
                // Set $or_doc to the uploaded file name
                $or_doc = $file_name;
            } else {
                echo "Error occurred while uploading the file.";
                exit();
            }
        } else {
            // If no new file is uploaded, retain the existing or_doc value
            $or_doc = $existing_or_doc;
        }

        // Prepare and bind SQL statement to update data in the table
        $stmt = $conn->prepare("UPDATE orga SET staff_id = ?, or_title = ?, or_doc = ? WHERE or_id = ?");
        $stmt->bind_param("sssi", $staff_id, $or_title,   $or_doc, $or_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Data updated successfully
            echo "<script>alert('Article updated successfully.');</script>";
            // Redirect to the article list page
            echo "<script>window.location = '../model/update_orga.php';</script>";
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
