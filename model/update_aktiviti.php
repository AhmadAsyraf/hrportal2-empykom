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

<?php include('admin_menu.php') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Create Activity content</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Activity</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <!-- Start Disiplin list -->
  <section class="section">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Create Activity</h5>
        <form action="../control/ak-process-form.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="title">Event Name:</label>
            <input type="text" name="ak_title" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="title">Year:</label>
            <input type="text" name="ak_year" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="image">Upload File:</label>
            <input type="file" name="ak_doc[]" multiple>
          </div><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </section> 
  <!-- Start Calendar list -->
 <!-- Start Disiplin list -->
<?php
// Include your database connection file
include('../dbconn.php');

// Fetch events data from the database
$sql = "SELECT ak_id, ak_title, ak_year, ak_doc FROM aktiviti";
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
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Activity List<span></span></h5>
            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">Event</th>
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
                        echo "<td>" . $event['ak_title'] . "</td>";
                        echo "<td>" . $event['ak_year'] . "</td>";
                        $documentPath = "../uploads/" . $event['ak_doc'];
                        echo "<td><a href='" . $documentPath . "' target='_blank'>View Document</a></td>";
                        echo "<td><a href='../model/edit-ak.php?ak_id=" . $event['ak_id'] . "' style='color: green;'>edit</a></td>"; 
                        echo "<td><a href='../control/delete-ak.php?ak_id=" . $event['ak_id'] . "' style='color: red;'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div><!-- End Disiplin list--> 
</main><!-- End #main -->
<?php include('admin_footer.php') ?>