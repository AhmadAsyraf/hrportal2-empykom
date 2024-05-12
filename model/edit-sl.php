<?php
// Include your database connection file
include('../dbconn.php');

// Check if sl_id is provided in the URL
if (isset($_GET['sl_id'])) {
    $sl_id = $_GET['sl_id'];

   // Fetch details of the slider with the given sl_id from the database
$sql = "SELECT * FROM slider WHERE sl_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $sl_id);
$stmt->execute();
$slider_result = $stmt->get_result(); // Renamed variable to avoid confusion

if ($slider_result->num_rows == 1) { // Changed variable name from $result to $slider_result
    $slider = $slider_result->fetch_assoc(); // Fetching associative array directly
} else {
    // Handle case where no slider is found
    echo "Slider not found.";
    exit(); // Terminate the script execution
}

} else {
    // Handle case where bk_id is not provided in the URL
    echo "Banner ID not provided.";
    exit(); // Terminate the script execution
}
?>

<?php
// Start the session
session_start();

// Check if ua_username session variable is set
if (isset($_SESSION["ua_username"])) {
    $ua_username = $_SESSION["ua_username"];
} else {
    // Handle case where session variable is not set (optional)
    $ua_username = "Guest"; // Set a default value or handle the error as needed
}
?>
<?php include('../admin/header.php') ?>
<?php include('../view/admin_nav.php') ?>
<?php include('../model/admin_menu.php') ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Banner</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Banner</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <!-- Start Bank Edit Form -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Banner</h5>
                <form action="../control/edit-sl-process.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="staff_id">Admin ID:</label>
                        <input type="text" name="staff_id" class="form-control" value="<?php echo $slider['staff_id']; ?>" required>
                    </div><br>
                    <div class="form-group">
                        <label for="sl_title">Title:</label>
                        <input type="text" name="sl_title" class="form-control" value="<?php echo $slider['sl_title']; ?>" required>
                    </div><br>
                   
                    <div class="form-group">
                        <label for="sl_doc">Uploaded Document:</label>
                        <span><?php echo $slider['sl_doc']; ?></span> <!-- Display file name here -->
                        <input type="file" name="sl_doc" multiple class="form-control"><br>
                    </div><br> 
                    <!-- Hidden input field to send bk_id -->
                    <input type="hidden" name="sl_id" value="<?php echo $sl_id; ?>"> 
                    <button type="submit" class="btn btn-primary">Update</button>
                </form> 
            </div>
        </div>
    </section> 
    <!-- End Bank Edit Form -->

    <!-- Start Bank List -->
    <?php include('../view/disp_banner.php') ?>
    <!-- End Bank List -->

</main><!-- End #main -->
<?php include('admin_footer.php') ?>
