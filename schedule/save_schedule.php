<?php
require_once('db-connect.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if all required fields are present and not empty
    if (
        isset($_FILES['cal_doc']) && 
        $_FILES['cal_doc']['error'] === UPLOAD_ERR_OK && 
        isset($_POST['title']) && 
        isset($_POST['description']) && 
        isset($_POST['start_datetime']) && 
        isset($_POST['end_datetime']) && 
        isset($_POST['cal_category'])
    ) {
        // Specify the directory where you want to save the uploaded files
        $uploadDirectory = '../uploads/';

        // Get the file name and temporary file location
        $fileName = $_FILES['cal_doc']['name'];
        $tempFileName = $_FILES['cal_doc']['tmp_name'];

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($tempFileName, $uploadDirectory . $fileName)) {
            // File upload successful, continue with database operation
            // Extract data from POST request
            $title = $_POST['title'];
            $description = $_POST['description'];
            $start_datetime = $_POST['start_datetime'];
            $end_datetime = $_POST['end_datetime'];
            $cal_category = $_POST['cal_category'];

            // Check if 'id' is empty to determine if it's an insert or update operation
            $id = isset($_POST['id']) ? $_POST['id'] : '';

            if (empty($id)) {
                // If 'id' is empty, it's an insert operation
                $sql = "INSERT INTO `schedule_list` (`title`, `description`, `start_datetime`, `end_datetime`, `cal_doc`, `cal_category`) VALUES ('$title', '$description', '$start_datetime', '$end_datetime', '$fileName', '$cal_category')";
            } else {
                // If 'id' is not empty, it's an update operation
                $sql = "UPDATE `schedule_list` SET `title` = '$title', `description` = '$description', `start_datetime` = '$start_datetime', `end_datetime` = '$end_datetime', `cal_doc` = '$fileName', `cal_category` = '$cal_category' WHERE `id` = '$id'";
            }

            // Execute the SQL query
            $save = $conn->query($sql);

            // Check if the query executed successfully
            if ($save) {
                echo "<script> alert('Schedule Successfully Saved.'); location.replace('index.php') </script>";
            } else {
                // If an error occurred, display the error message along with SQL query for debugging
                echo "<pre>";
                echo "An Error occurred.<br>";
                echo "Error: " . $conn->error . "<br>";
                echo "SQL: " . $sql . "<br>";
                echo "</pre>";
            }
        } else {
            // File upload failed
            echo "Error: Failed to upload file.";
        }
    } else {
        // Some required data is missing
        echo "Error: Required data is missing.";
    }
} else {
    // Invalid request method
    echo "<script> alert('Error: Invalid request method.'); location.replace('./') </script>";
}

// Close the database connection
$conn->close();
?>
