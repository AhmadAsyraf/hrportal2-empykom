<?php
// Include your database connection file
include('../dbconn.php');

// Check if br_id is provided in the URL
if (isset($_GET['br_id'])) {
    $br_id = $_GET['br_id'];

    // Fetch details of the brules with the given br_id from the database
    $sql = "SELECT * FROM brules WHERE br_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $br_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $brules = $result->fetch_assoc();
    } else {
        // Handle case where no brules is found
        echo "brules not found.";
        exit(); // Terminate the script execution
    }
} else {
    // Handle case where br_id is not provided in the URL
    echo "brules ID not provided.";
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
        <h1>Edit Basic Rules</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Basic rules</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <!-- Start Bank Edit Form -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Basic Rules Form</h5>
                <form action="../control/edit-br-process.php" method="post" enctype="multipart/form-data">
                    <!-- Hidden input field for ar_id -->
                    <input type="hidden" name="br_id" value="<?php echo $brules['br_id']; ?>">
                    <div class="form-group">
                        <label for="staff_id">Admin ID:</label>
                        <input type="text" name="staff_id" class="form-control" value="<?php echo $brules['staff_id']; ?>" required><br>
                    </div>
                    <div class="form-group">
                        <label for="br_title">Title:</label>
                        <input type="text" name="br_title" class="form-control" value="<?php echo $brules['br_title']; ?>" required>
                    </div><br>
                    <div class="form-group">
                        <label for="br_date">Publish Date:</label>
                        <input type="date" name="br_date" class="form-control" value="<?php echo $brules['br_date']; ?>" required><br>
                    </div>
                    <div class="form-group">
                        <label for="br_doc">Uploaded Document:</label>
                        <span><?php echo $brules['br_doc']; ?></span> <!-- Display file name here -->
                        <input type="file" name="br_doc" multiple class="form-control"><br>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            </div>
        </div>
    </section>
    <!-- End Bank Edit Form -->



    <!-- Start Announcement list -->

    <?php
    // Include your database connection file
    include('../dbconn.php');
    // Fetch events data from the database
    $sql = "SELECT br_id, br_title, br_date, br_doc FROM brules";
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
          <h5 class="card-title">Basic Rules<span></span></h5>
          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Publish Date</th>
                <th scope="col">Document</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Loop through events array and populate table rowsS
              foreach ($events as $event) {
                // Output table row with event data
                echo "<tr>";
                echo "<td>" . $event['br_title'] . "</td>";
                echo "<td>" . $event['br_date'] . "</td>";
                $documentPath = "../uploads/" . $event['br_doc'];
                echo "<td><a href='" . $documentPath . "' target='_blank'>View Document</a></td>";
                echo "<td><a href='../model/edit-br.php?br_id=" . $event['br_id'] . "' style='color: green;'>edit</a></td>"; 
                echo "<td><a href='../control/delete-br.php?br_id=" . $event['br_id'] . "' style='color: red;'>Delete</a></td>"; 
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- End Announcement list -->




</main><!-- End #main -->
<?php include('admin_footer.php') ?>