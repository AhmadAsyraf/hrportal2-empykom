<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['staff_id']) && isset($_POST['pb_title']) && isset($_POST['pb_year']) ) {
        // Retrieve form data
        $staff_id = $_POST['staff_id'];
        $title = $_POST['pb_title'];
        $vol = $_POST['pb_year'];
      

       // Include your database connection file
       include('../dbconn.php');

        // Check if file was uploaded
        if (!empty($_FILES['pb_doc']['name'])) {
            // File upload handling
            $target_dir = "../uploads/"; // Directory where the file will be saved
            $target_file = $target_dir . basename($_FILES["pb_doc"]["name"]);

            // Attempt to move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["pb_doc"]["tmp_name"], $target_file)) {
                // File upload successful, now insert data into database
                $document_name = basename($_FILES["pb_doc"]["name"]);
            } else {
                echo "Sorry, there was an error uploading your file.";
                exit; // Exit the script if there was an error uploading the file
            }
        } else {
            // No file uploaded, set document name to NULL or any default value you want
            $document_name = NULL; // or $document_name = "default_document.pdf";
        }

     // Remove 'ms_title' from the SQL statement
     $sql = "INSERT INTO perjanjian_bersama (staff_id, pb_title, pb_year, pb_doc) VALUES (?, ?, ?, ?)";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("isss", $staff_id, $title, $vol, $document_name);


        // Execute the statement
        if ($stmt->execute()) {
            // New record created successfully
            echo "<script>alert('New record created successfully.');</script>";
            // Redirect to update_disiplin.php
            echo "<script>window.location = '../model/update_perjanjian_bersama.php';</script>";
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
    header("Location: ../model/update_perjanjian_bersama.php");
    exit;
}
?>
