<?php
// Start the session

// Include your database connection file
include('dbconn.php');

// Check if staff_pass_id and staff_name session variables are set
if (isset($_SESSION["staff_pass_id"]) && isset($_SESSION["staff_name"])) {
    // Retrieve staff_pass_id and staff_name from session variables
    $staff_pass_id = $_SESSION["staff_pass_id"];
    $staff_name = $_SESSION["staff_name"];

    // Prepare SQL statement to fetch po_id of the staff
    $sql_staff = "SELECT po_id FROM staff WHERE staff_pass_id = '$staff_pass_id' AND staff_name = '$staff_name'";
    $result_staff = $conn->query($sql_staff);

    if ($result_staff->num_rows > 0) {
        // Fetch po_id of the staff
        $row_staff = $result_staff->fetch_assoc();
        $po_id = $row_staff['po_id'];

        // Prepare SQL statement to fetch p_polisi based on po_id and p_category
        $sql_policy = "SELECT p_polisi FROM policy WHERE po_id = '$po_id' AND p_category = 'Working Hour'";
        $result_policy = $conn->query($sql_policy);

        if ($result_policy->num_rows > 0) {
            // Fetch and display p_polisi
            while ($row_policy = $result_policy->fetch_assoc()) {
                echo "<p>" . $row_policy['p_polisi'] . "</p>";
            }
        } else {
            echo "No policy found for the staff's position with the category Working Hour.";
        }
    } else {
        echo "No staff found with the provided credentials.";
    }
} else {
    // If session variables are not set, display an error message or redirect the user
    echo "Session variables not set!";
}

// Close database connection
$conn->close();
?>
</div>
<hr>
<h1 class="flex items-center mb-5 text-16 leading-1/5em text-gray-600"> </h1> <br>
