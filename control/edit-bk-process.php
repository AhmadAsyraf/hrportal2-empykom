<?php
// Include your database connection file
include('../dbconn.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if bk_id is provided
    if (isset($_POST['bk_id'])) {
        // Retrieve form data
        $bk_id = $_POST['bk_id'];
        $staff_id = $_POST['staff_id'];
        $bk_title = $_POST['bk_title'];
        $bk_category = $_POST['bk_category'];
        $bk_year = $_POST['bk_year'];

        // Check if a file is uploaded
        if(isset($_FILES['bk_doc']) && $_FILES['bk_doc']['error'] === UPLOAD_ERR_OK) {
            // Retrieve file name
            $file_name = $_FILES['bk_doc']['name'];
            // Temporarily store the file
            $tmp_name = $_FILES['bk_doc']['tmp_name'];
            // Move the uploaded file to the desired location
            move_uploaded_file($tmp_name, "../uploads/" . $file_name);
            // Set $bk_doc to the uploaded file name
            $bk_doc = $file_name;
        } else {
            // No file uploaded, retain the existing value of bk_doc
            // Retrieve the existing bk_doc value from the database
            $sql = "SELECT bk_doc FROM bank WHERE bk_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $bk_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $bk_doc = $row['bk_doc'];
        }

        // Prepare and bind SQL statement to update data in the table
        $stmt = $conn->prepare("UPDATE bank SET staff_id = ?, bk_title = ?, bk_category = ?, bk_doc = ?, bk_year = ? WHERE bk_id = ?");
        $stmt->bind_param("sssssi", $staff_id, $bk_title, $bk_category, $bk_doc, $bk_year, $bk_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Data updated successfully
            echo "<script>alert('Bank updated successfully.');</script>";
            // Redirect to the bank list page
            echo "<script>window.location = '../model/update_bank.php';</script>";
            exit();
        } else {
            // Error occurred while updating data
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Bank ID not provided.";
    }
} else {
    // If form is not submitted, display an error message
    echo "Form submission error!";
}

// Close database connection
$conn->close();
?>
