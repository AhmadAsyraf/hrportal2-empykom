<?php
// Include your database connection file
include('../dbconn.php');

// Check if ak_id is provided in the URL
if (isset($_GET['ak_id'])) {
    $ak_id = $_GET['ak_id'];

    // Fetch details of the activity with the given ak_id from the database
    $sql = "SELECT * FROM aktiviti WHERE ak_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $ak_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $aktiviti = $result->fetch_assoc();
    } else {
        // Handle case where no activity is found
        echo "Activity not found.";
        exit(); // Terminate the script execution
    }
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
    <h1>Edit Activity</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Activity</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <!-- Start Activity Edit Form -->
  <section class="section">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Edit Activity</h5>
        <form action="../control/edit-ak-process.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" value="<?php echo $aktiviti['staff_id']; ?>" required>
          </div><br>
          <div class="form-group">
            <label for="title">Event Name:</label>
            <input type="text" name="ak_title" class="form-control" value="<?php echo $aktiviti['ak_title']; ?>" required>
          </div><br>
          <div class="form-group">
            <label for="title">Year:</label>
            <input type="text" name="ak_year" class="form-control" value="<?php echo $aktiviti['ak_year']; ?>" required>
          </div><br>
          <div class="form-group">
             <label for="ak_doc">Uploaded Document:</label>
            <span><?php echo $aktiviti['ak_doc']; ?></span> <!-- Display file name here -->
            <input type="file" name="ak_doc" multiple class="form-control"><br>
          </div><br>
          <input type="hidden" name="ak_id" value="<?php echo $ak_id; ?>"> <!-- Hidden field to send ak_id -->
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </section> 
  <!-- End Activity Edit Form -->

  <!-- Start Activity List -->
  <?php include('../view/disp_act.php') ?>
  <!-- End Activity List -->

</main><!-- End #main -->
<?php include('admin_footer.php') ?>
