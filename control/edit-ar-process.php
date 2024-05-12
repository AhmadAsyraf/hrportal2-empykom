<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if ar_id is provided
    if (isset($_POST['ar_id'])) {
        // Retrieve form data
        $ar_id = $_POST['ar_id'];
        $staff_id = $_POST['staff_id'];
        $ar_title = $_POST['ar_title'];
        $ar_date = $_POST['ar_date'];

        // Retrieve existing ar_doc value
        $sql = "SELECT ar_doc FROM artikel WHERE ar_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $ar_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $existing_ar_doc = $row['ar_doc'];

        // Check if a file is uploaded
        if(isset($_FILES['ar_doc']) && $_FILES['ar_doc']['error'] === UPLOAD_ERR_OK) {
            // Retrieve file name
            $file_name = $_FILES['ar_doc']['name'];
            // Temporarily store the file
            $tmp_name = $_FILES['ar_doc']['tmp_name'];
            // Move the uploaded file to the desired location
            if(move_uploaded_file($tmp_name, "../uploads/" . $file_name)) {
                // Set $ar_doc to the uploaded file name
                $ar_doc = $file_name;
            } else {
                echo "Error occurred while uploading the file.";
                exit();
            }
        } else {
            // If no new file is uploaded, retain the existing ar_doc value
            $ar_doc = $existing_ar_doc;
        }

        // Prepare and bind SQL statement to update data in the table
        $stmt = $conn->prepare("UPDATE artikel SET staff_id = ?, ar_title = ?, ar_doc = ?, ar_date = ? WHERE ar_id = ?");
        $stmt->bind_param("ssssi", $staff_id, $ar_title,   $ar_doc, $ar_date, $ar_id);

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
