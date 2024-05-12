<?php 
require_once('./dbconn.php');

// Check if the request method is POST
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    $conn->close();
    exit;
}

// Extract data from POST request
extract($_POST);

// Check if the 'allday' checkbox is checked
$allday = isset($allday);

// Check if 'id' is empty to determine if it's an insert or update operation
if(empty($id)){
    // If 'id' is empty, it's an insert operation
    // Modify the SQL query to include 'cal_doc'
    $sql = "INSERT INTO `schedule_list` (`title`,`description`,`start_datetime`,`end_datetime`, `cal_doc`) VALUES ('$title','$description','$start_datetime','$end_datetime', '$cal_doc')";
} else {
    // If 'id' is not empty, it's an update operation
    // Modify the SQL query to update 'cal_doc' as well
    $sql = "UPDATE `schedule_list` SET `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}', `cal_doc` = '{$cal_doc}' WHERE `id` = '{$id}'";
}

// Execute the SQL query
$save = $conn->query($sql);

// Check if the query executed successfully
if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('./') </script>";
} else {
    // If an error occurred, display the error message along with SQL query for debugging
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}

// Close the database connection
$conn->close();
?>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['start_datetime']) && isset($_POST['end_datetime']) && isset($_POST['staff_id'])) {
        // Retrieve form data
        $event = $_POST['title'];
        $desc = $_POST['description'];
        $start = $_POST['start_datetime'];
        $end = $_POST['end_datetime'];
        $staffid = $_POST['staff_id']; // Assign staff_id from form data to $staffid variable
        
     include('dbconn.php');

        // Check if file was uploaded
        if (!empty($_FILES['cal_doc']['name'])) {
            // File upload handling
            $target_dir = "uploads/"; // Directory where the file will be saved
            $target_file = $target_dir . basename($_FILES["cal_doc"]["name"]);
            
            // Attempt to move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["cal_doc"]["tmp_name"], $target_file)) {
                // File upload successful, now insert data into database
                $image_name = basename($_FILES["cal_doc"]["name"]);
            } else {
                echo "Sorry, there was an error uploading your file.";
                exit; // Exit the script if there was an error uploading the file
            }
        } else {
            // No file uploaded, set image name to NULL or any default value you want
            $image_name = NULL; // or $image_name = "default_image.jpg";
        }

        // Insert data into database
        $sql = "INSERT INTO schedule_list (title, description , start_datetime, end_datetime, cal_doc, staff_id) VALUES ('$event', '$desc', '$start', '$end', '$image_name', '$staffid')"; // Include $image_name for cal_doc column
        if ($conn->query($sql) === TRUE) {
            // JavaScript alert to inform the user
            echo '<script>alert("New record created successfully.");</script>';
            
            // Redirect to update_announcement.php after a delay
            echo '<meta http-equiv="refresh" content="2;url=update_calender1.php">';
        } else {
            // Display error message
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // Close database connection
        $conn->close();
    } else {
        echo "Please fill all the required fields.";
    }
} else {
    // If the form is not submitted, redirect back to the form page or do whatever is appropriate for your case.
    header("Location: your-form-page.php");
    exit;
}
?>
