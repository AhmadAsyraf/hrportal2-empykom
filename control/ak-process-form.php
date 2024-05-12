<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['staff_id']) && isset($_POST['ak_title']) && isset($_POST['ak_year'])) {
        // Retrieve form data
        $staff_id = $_POST['staff_id'];
        $title = $_POST['ak_title'];
        $year = $_POST['ak_year'];

      
        // Include your database connection file
        include('../dbconn.php');

        // Initialize an array to store document names
        $document_names = array();

        // Check if files were uploaded
        if (!empty($_FILES['ak_doc']['name'][0])) {
            // File upload handling
            $target_dir = "../uploads/"; // Directory where the files will be saved

            // Loop through all uploaded files
            foreach($_FILES['ak_doc']['tmp_name'] as $key => $tmp_name) {
                $target_file = $target_dir . basename($_FILES["ak_doc"]["name"][$key]);

                // Attempt to move the uploaded file to the target directory
                if (move_uploaded_file($_FILES["ak_doc"]["tmp_name"][$key], $target_file)) {
                    // File upload successful, add document name to array
                    $document_names[] = basename($_FILES["ak_doc"]["name"][$key]);
                } else {
                    echo "Sorry, there was an error uploading one of your files.";
                    exit; // Exit the script if there was an error uploading a file
                }
            }
        }

        // Prepare and bind the SQL statement
        $sql = "INSERT INTO aktiviti (staff_id, ak_title, ak_year, ak_doc) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bind_param("isis", $staff_id, $title, $year, $document_name);

        // Execute the statement for each document name
        foreach ($document_names as $document_name) {
            $document_name = ($document_name != '') ? $document_name : NULL;
            $stmt->execute();
        }

        // Close prepared statement and database connection
        $stmt->close();
        $conn->close();

        // Redirect after insertion
        echo "<script>alert('New records created successfully.');</script>";
        echo "<script>window.location = '../model/update_aktiviti.php';</script>";
        exit; // Exit the script after redirection
    } else {
        echo "Please fill all the required fields.";
    }
} else {
    // If the form is not submitted, redirect back to the form page or do whatever is appropriate for your case.
    echo "<script>alert('New records failed to created.');</script>";
    header("Location: ../model/update_aktiviti.php");
    exit;
}
?>
