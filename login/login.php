<?php
// Start the session
session_start();

// Include your database connection file
include('../dbconn.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape special characters to prevent SQL injection
    $staff_id = $conn->real_escape_string($_POST["staff_pass_id"]);
    $staff_name = $conn->real_escape_string($_POST["staff_name"]);
    
    // Prepare SQL statement
    $sql = "SELECT * FROM staff WHERE staff_pass_id = '$staff_id' AND staff_name = '$staff_name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch po_id from the result
        $row = $result->fetch_assoc();
        $po_id = $row['po_id'];

        // Set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["staff_pass_id"] = $staff_id;
        $_SESSION["staff_name"] = $staff_name;
        
        // Set success message
        $_SESSION["success_message"] = "Login successful.";

        // Redirect based on po_id
        if ($po_id == 1) {
            header("Location: ../admin.php");
            exit;
        } elseif ($po_id == 3) {
            header("Location: ../polisi.php");
            exit;
        } elseif ($po_id == 5) {
            header("Location: ../polisi.php");
            exit;
        } elseif ($po_id == 7) {
            header("Location: ../polisi.php");
            exit;
        } elseif ($po_id == 9) {
            header("Location: ../polisi.php");
            exit;
        } else {
            // Redirect to default page if po_id doesn't match any specific condition
            header("Location: ../default_page.php");
            exit;
        }
    } else {
        // Redirect back to login page with error message
        $_SESSION['error_message'] = "Invalid credentials. Please try again.";
        header("Location: ../polisiHR.php");
        exit;
    }
}

// Close connection
$conn->close();
?>
