<?php

include ('dbconn.php');

// Check if staff_pass_id and staff_name session variables are set
if (isset($_SESSION["staff_pass_id"]) && isset($_SESSION["staff_name"])) {
    // Retrieve staff_pass_id and staff_name from session variables
    $staff_pass_id = $_SESSION["staff_pass_id"];
    $staff_name = $_SESSION["staff_name"]; 

    // Prepare SQL statement to fetch po_id of the staff
    $sql_staff = "SELECT po_id FROM staff WHERE staff_pass_id = '$staff_pass_id' AND staff_name = '$staff_name'";
    $result_staff = $conn->query($sql_staff);

    // Check if the query was successful
    if ($result_staff) {
        // Check if at least one row was returned
        if ($result_staff->num_rows > 0) {
            // Fetch po_id of the staff
            $row_staff = $result_staff->fetch_assoc();
            $po_id = $row_staff['po_id'];

            // Prepare SQL statement to fetch p_category and p_title based on po_id
            $sql_policy = "SELECT p_category, p_title FROM policy WHERE po_id = '$po_id'";
            $result_policy = $conn->query($sql_policy);

            // Check if the query was successful
            if ($result_policy) {
                // Check if at least one row was returned
                if ($result_policy->num_rows > 0) {
                    // Display p_category and p_title in a table with numbering
                    echo "<table style='width: 100%; border-collapse: collapse;'>";
                    echo "<tr style='background-color: orange;'>";
                    echo "<th style='border: 1px solid #ddd; padding: 8px; text-align: left; color: white;'><strong>#</strong></th>";
                    echo "<th style='border: 1px solid #ddd; padding: 8px; text-align: left; color: white;'><strong>Policy Category</strong></th>";
                    echo "<th style='border: 1px solid #ddd; padding: 8px; text-align: left; color: white;'><strong>Policy Title</strong></th>";
                    echo "</tr>";
                    
                    $count = 1; // Initialize count variable
                    while ($row_policy = $result_policy->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td style='border: 1px solid #ddd; padding: 8px;'>{$count}</td>";
                        echo "<td style='border: 1px solid #ddd; padding: 8px;'>{$row_policy['p_category']}</td>";
                        echo "<td style='border: 1px solid #ddd; padding: 8px;'>{$row_policy['p_title']}</td>";
                        echo "</tr>";
                        $count++;
                    }
                    echo "</table>";
                } else {
                    echo "No policy found for the staff's position.";
                }
            } else {
                // Handle SQL error
                echo "Error: " . $conn->error;
            }
        } else {
            echo "No staff found with the provided credentials.";
        }
    } else {
        // Handle SQL error
        echo "Error: " . $conn->error;
    }

    // Close the database connection (assuming $conn is a valid MySQLi connection)
    $conn->close();
} else {
    // If session variables are not set, display an error message or redirect the user
    echo "Session variables not set!";
}

?>
