<?php
// Include database connection
include('../dbconn.php');


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (
        isset($_POST['staff_id']) &&
        isset($_POST['jk_title']) &&
        isset($_POST['jk_shop']) &&
        isset($_POST['jk_category']) &&
        isset($_POST['jk_kekosongan']) &&
        isset($_POST['jk_due_date'])
    ) {
        // Retrieve the form data
        $staff_id = $_POST['staff_id'];
        $jk_title = $_POST['jk_title'];
        $jk_shop = $_POST['jk_shop'];
        $jk_category = $_POST['jk_category'];
        $jk_kekosongan = $_POST['jk_kekosongan'];
        // Ensure jk_kelayakkan is set to avoid undefined array key warning
        $jk_kelayakkan = isset($_POST['jk_kelayakkan']) ? $_POST['jk_kelayakkan'] : "";
        $jk_due_date = $_POST['jk_due_date'];

        // Debugging: Echo out jk_kelayakkan value
        echo "jk_kelayakkan value: " . $jk_kelayakkan . "<br>";

        // Prepare SQL statement
        $sql = "INSERT INTO jawatan_kosong (staff_id, jk_title, jk_shop, jk_category, jk_kekosongan, jk_kelayakkan, jk_due_date)
        VALUES ('$staff_id', '$jk_title', '$jk_shop', '$jk_category', '$jk_kekosongan', '$jk_kelayakkan', '$jk_due_date')";

        // Debugging: Echo out SQL query
        echo "SQL query: " . $sql . "<br>";

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            // If successful, redirect to update_jawatan_kosong.php
            header("Location: ../model/update_jawatan_kosong.php");
            exit(); // Make sure to exit after redirecting to prevent further execution
        } else {
            // If an error occurs, redirect with error message
            $error_message = "Error: " . $sql . "<br>" . $conn->error;
            header("Location: ../model/update_jawatan_kosong.php?error=" . urlencode($error_message));
            exit(); // Make sure to exit after redirecting to prevent further execution
        }
    } else {
        // If required fields are not filled, handle the error accordingly
        echo "All required fields must be filled!";
    }
}
?>
