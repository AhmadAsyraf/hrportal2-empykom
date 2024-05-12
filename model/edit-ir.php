<?php
// Include your database connection file
include('../dbconn.php');

// Check if ir_id is provided in the URL
if (isset($_GET['ir_id'])) {
    $ir_id = $_GET['ir_id'];

    // Fetch details of the activity with the given ir_id from the database
    $sql = "SELECT * FROM buletin_ir WHERE ir_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $ir_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $buletin_ir = $result->fetch_assoc();
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
        <form action="../control/edit-ir-process.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" value="<?php echo $buletin_ir['staff_id']; ?>" required>
          </div><br>
          <div class="form-group">
            <label for="title">Event Name:</label>
            <input type="text" name="ir_title" class="form-control" value="<?php echo $buletin_ir['ir_title']; ?>" required>
          </div><br>
          <div class="form-group">
            <label for="title">Year:</label>
            <input type="text" name="ir_year" class="form-control" value="<?php echo $buletin_ir['ir_year']; ?>" required>
          </div><br>
          <div class="form-group">
             <label for="ir_doc">Uploaded Document:</label>
            <span><?php echo $buletin_ir['ir_doc']; ?></span> <!-- Display file name here -->
            <input type="file" name="ir_doc" multiple class="form-control"><br>
          </div><br>
          <input type="hidden" name="ir_id" value="<?php echo $ir_id; ?>"> <!-- Hidden field to send ir_id -->
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </section> 
  <!-- End Activity Edit Form -->

 <!-- Start buletinIR -->
 <?php
    // Database connection parameters
   include('dbconn.php');
    // Fetch events data from the database
    $sql = "SELECT ir_id, ir_title, ir_year, ir_doc  FROM buletin_ir";
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
    <div class="col-12">
      <div class="card recent-sales overflow-auto">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-thre                                                                                                         e-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>
        <div class="card-body">
          <h5 class="card-title">Bulletin IR <span></span></h5>
          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Year</th>
                <th scope="col">Document</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Loop through events array and populate table rows
              foreach ($events as $event) {
                // Output table row with event data
                echo "<tr>";
                echo "<td>" . $event['ir_title'] . "</td>";
                echo "<td>" . $event['ir_year'] . "</td>";
                $documentPath = "../uploads/" . $event['ir_doc'];
                echo "<td><a href='" . $documentPath . "' target='_blank'>View Document</a></td>";
                echo "<td><a href='../model/edit-ir.php?ir_id=" . $event['ir_id'] . "' style='color: green;'>edit</a></td>"; 
                echo "<td><a href='../control/delete-ir.php?ir_id=" . $event['ir_id'] . "' style='color: red;'>Delete</a></td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- End Buletin IRt-->
  <!-- End Activity List -->

</main><!-- End #main -->
<?php include('admin_footer.php') ?>
