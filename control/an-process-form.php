<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['staff_id']) && isset($_POST['an_title']) && isset($_POST['an_desc'])&& isset($_POST['an_image']) && isset($_POST['an_date'])) {
        // Retrieve form data
        $staff_id = $_POST['staff_id'];
        $title = $_POST['an_title'];
        $description = $_POST['an_desc'];
        $image = $_POST['an_image'];
        $publish_date = $_POST['an_date'];

        // Include your database connection file
        include('../dbconn.php');

        
        // Prepare and bind the SQL statement
        $sql = "INSERT INTO announcement (staff_id, an_title, an_desc, an_date, an_image    ) VALUES (?, ?, ?, ?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issss", $staff_id, $title, $description, $publish_date,  $image );

        // Execute the statement
        if ($stmt->execute()) {
            // New record created successfully
            echo "<script>alert('New record created successfully.');</script>";
            // Redirect to update_disiplin.php
            echo "<script>window.location = '../model/update_annoucement.php';</script>";
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
    header("Location: ../model/update_announcement.php");
    exit;
}
?>