<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['staff_id']) && isset($_POST['cu_name']) && isset($_POST['cu_ext']) && isset($_POST['cu_sect']) && isset($_POST['cu_dept']) && isset($_POST['cu_position'])) {
        // Retrieve form data
        $staff_id = $_POST['staff_id'];
        $name = $_POST['cu_name'];
        $ext = $_POST['cu_ext'];
        $sect = $_POST['cu_sect'];
        $dept = $_POST['cu_dept'];
        $position = $_POST['cu_position'];
  
        // File upload handling
        
            // Include your database connection file
            include('../dbconn.php');

            // Modify the SQL statement to include the image file path
         
            $stmt = $conn->prepare("INSERT INTO contact_us (staff_id, cu_dept, cu_sect, cu_name, cu_position, cu_ext) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssss", $staff_id, $dept, $sect, $name, $position, $ext);
            
 
            // Execute the statement
            if ($stmt->execute()) {
                // New record created successfully
                echo "<script>alert('New record created successfully.');</script>";
                // Redirect to update_disiplin.php
                echo "<script>window.location = '../model/update_contact_us.php';</script>";
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
    header("Location: ../model/update_contact_us.php");
    exit;
}
?>
