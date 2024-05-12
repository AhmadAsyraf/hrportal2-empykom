<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['staff_id']) && isset($_POST['ms_title']) && isset($_POST['ms_vol']) && isset($_POST['ms_category']) && isset($_POST['ms_date'])) {
        // Retrieve form data
        $staff_id = $_POST['staff_id'];
        $title = $_POST['ms_title'];
        $vol = $_POST['ms_vol'];
        $category = $_POST['ms_category'];
        $date = $_POST['ms_date'];

       // Include your database connection file
       include('../dbconn.php');

        // Check if file was uploaded
        if (!empty($_FILES['ms_doc']['name'])) {
            // File upload handling
            $target_dir = "../uploads/"; // Directory where the file will be saved
            $target_file = $target_dir . basename($_FILES["ms_doc"]["name"]);

            // Attempt to move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["ms_doc"]["tmp_name"], $target_file)) {
                // File upload successful, now insert data into database
                $document_name = basename($_FILES["ms_doc"]["name"]);
            } else {
                echo "Sorry, there was an error uploading your file.";
                exit; // Exit the script if there was an error uploading the file
            }
        } else {
            // No file uploaded, set document name to NULL or any default value you want
            $document_name = NULL; // or $document_name = "default_document.pdf";
        }

     // Remove 'ms_title' from the SQL statement
     $sql = "INSERT INTO message_ (staff_id, ms_title, ms_vol, ms_category, ms_doc, ms_date) VALUES (?, ?, ?, ?, ?, ?)";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("isssss", $staff_id, $title, $vol, $category, $document_name, $date);


        // Execute the statement
        if ($stmt->execute()) {
            // New record created successfully
            echo "<script>alert('New record created successfully.');</script>";
            // Redirect to update_disiplin.php
            echo "<script>window.location = '../model/update_message.php';</script>";
            exit; // Exit the script after redirection
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close prepared statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Please fill all the required fields.";
    }
} else {
    // If the form is not submitted, redirect back to the form page or do whatever is appropriate for your case.
    header("Location: ../model/update_message.php");
    exit;
}
?>
