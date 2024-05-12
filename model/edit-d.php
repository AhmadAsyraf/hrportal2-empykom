<?php
// Include your database connection file
include('../dbconn.php');

// Check if d_id is provided in the URL
if (isset($_GET['d_id'])) {
    $d_id = $_GET['d_id'];

    // Fetch details of the disiplin with the given d_id from the database
    $sql = "SELECT * FROM disiplin WHERE d_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $d_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $disiplin = $result->fetch_assoc();
    } else {
        // Handle case where no disiplin is found
        echo "disiplin not found.";
        exit(); // Terminate the script execution
    }
} else {
    // Handle case where d_id is not provided in the URL
    echo "disiplin ID not provided.";
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
        <h1>Edit disiplin</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">disiplin</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <!-- Start disiplin Edit Form -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit disiplin</h5>
                <form action="../control/edit-d-process.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="staff_id">Admin ID:</label>
                        <input type="text" name="staff_id" class="form-control" value="<?php echo $disiplin['staff_id']; ?>" required>
                    </div><br>
                    
                    <div class="form-group">
                        <label for="d_category">Category:</label>
                        <select name="d_category" class="form-control" required>
                            <option value="">Select disiplin</option>
                            <option value="Kod Perlakuan"<?php if ($disiplin['d_category'] == 'Kod Perlakuan') echo 'selected'; ?>>Kod Perlakuan</option>
                            <option value="Prosedur Disiplin"<?php if ($disiplin['d_category'] == 'Prosedur Disiplin') echo 'selected'; ?>>Prosedur Disiplin</option>
                            <option value="Panduan Tindakkan Disiplin"<?php if ($disiplin['d_category'] == 'Panduan Tindakkan Disiplin') echo 'selected'; ?>>Panduan Tindakkan Disiplin</option>
                            <option value="Rekod Disiplin Bulanan"<?php if ($disiplin['d_category'] == 'Rekod Disiplin Bulanan') echo 'selected'; ?>>Rekod Disiplin Bulanan</option>
                           
                        </select>
                    </div><br>

                    <div class="form-group">
                        <label for="d_title">Title:</label>
                        <input type="text" name="d_title" class="form-control" value="<?php echo $disiplin['d_title']; ?>" required>
                    </div><br>

                    <div class="form-group">
                        <label for="d_doc">Uploaded Document:</label>
                        <span><?php echo $disiplin['d_doc']; ?></span> <!-- Display file name here -->
                        <input type="file" name="d_doc" multiple class="form-control"><br>
                    </div><br>
                    <div class="form-group">
                        <label for="publish_date">Publish Date:</label>
                        <input type="date" name="d_date" class="form-control" value="<?php echo $disiplin['d_date']; ?>" required><br>
                    </div> 
                    <!-- Hidden input field to send d_id -->
                    <input type="hidden" name="d_id" value="<?php echo $d_id; ?>"> 
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section> 
    <!-- End disiplin Edit Form -->

  
<!-- Start Disiplin list -->
<?php
 // Include your database connection file
 include('../dbconn.php');

// Fetch events data from the database
$sql = "SELECT d_id, d_category, d_title, d_doc, d_date FROM disiplin";
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
              <h5 class="card-title">Discipline <span></span></h5>
              <table class="table table-borderless datatable">
                  <thead>
                      <tr>
                          <th scope="col">Category</th>
                          <th scope="col">Title</th>
                          <th scope="col">Date</th>
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
                          echo "<td>" . $event['d_category'] . "</td>";
                          echo "<td>" . $event['d_title'] . "</td>";
                          echo "<td>" . $event['d_date'] . "</td>";
                          $documentPath = "uploads/" . $event['d_doc'];
                          echo "<td><a href='" . $documentPath . "' target='_blank'>View Document</a></td>";
                          echo "<td><a href='../model/edit-d.php?d_id=" . $event['d_id'] . "' style='color: green;'>edit</a></td>";
                          echo "<td><a href='../control/delete-d.php?d_id=" . $event['d_id'] . "' style='color: red;'>Delete</a></td>";
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
