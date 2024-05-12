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
<?php include('header.php') ?>
<?php include('../view/admin_nav.php') ?>


<?php include('admin_menu.php') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Create Announcement</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Announcement</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Announcement Form</h5>
        <form action="../control/an-process-form.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="publish_date">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" required><br>
          </div><br>

          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="an_title" class="form-control" required>
          </div><br>

          <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="an_desc" rows="4" class="form-control" required></textarea>
          </div><br>
          <div class="form-group">
            <label for="publish_date">Publish Date:</label>
            <input type="date" name="an_date" class="form-control" required><br>
          </div>
          <div class="form-group">
            <label for="title">url:</label>
            <input type="text" name="an_image" class="form-control" required>
          </div><br>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </section> 
  <?php include('../view/disp_cal.php') ?>
 
</main><!-- End #main -->

<?php include('admin_footer.php') ?>