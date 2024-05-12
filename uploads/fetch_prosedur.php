<?php 
// Include your database connection file
include('dbconn.php');

// Fetch events data from the database
$sql = "SELECT pro_title, pro_date , pro_category,  pro_doc FROM prosedur";
$result = $conn->query($sql);

// Store the fetched data in an array
$events = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}

// Close the database connection
$conn->close();
?>