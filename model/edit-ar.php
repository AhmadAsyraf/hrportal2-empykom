<?php
// Include your database connection file
include('../dbconn.php');

// Check if ua_id is provided in the URL
if (isset($_GET['ar_id'])) {
    $ar_id = $_GET['ar_id'];

    // Fetch details of the admin user with the given ua_id from the database
    $sql = "SELECT * FROM artikel WHERE ar_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $ar_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $artikel = $result->fetch_assoc();
        // Display edit form with pre-populated values
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
        <h1>Update Article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Update Article</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Start Disiplin list -->
    <section class="section">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Articles Form</h5>
        <!-- Your HTML code for creating a new article -->
        <form action="../control/edit-ar-process.php" method="post" enctype="multipart/form-data">
          <!-- Hidden input field for ar_id -->
          <input type="hidden" name="ar_id" value="<?php echo $artikel['ar_id']; ?>">
          <div class="form-group">
              <label for="staff_id">Admin ID:</label>
              <input type="text" name="staff_id" class="form-control" value="<?php echo $artikel['staff_id']; ?>" required><br>
          </div> 
          <div class="form-group">
              <label for="ar_title">Title:</label>
              <input type="text" name="ar_title" class="form-control" value="<?php echo $artikel['ar_title']; ?>" required>
          </div><br>
          <div class="form-group">
              <label for="ar_date">Publish Date:</label>
              <input type="date" name="ar_date" class="form-control" value="<?php echo $artikel['ar_date']; ?>" required><br>
          </div>
          <div class="form-group">
                        <label for="bk_doc">Uploaded Document:</label>
                        <span><?php echo $artikel['ar_doc']; ?></span> <!-- Display file name here -->
                        <input type="file" name="ar_doc" multiple class="form-control"><br>
                    </div><br> 
          <button type="submit" class="btn btn-primary">Update</button> 
      </form>

        
<?php
    } else {
        echo "Item not found.";
    }

    // Close statement
    $stmt->close();
} else {
    echo "ID not provided.";
}

// Close database connection
$conn->close();
?>
            </div>
        </div>
    </section>
    <?php
    // Include your database connection file
    include('../dbconn.php');

    // Fetch events data from the database
    $sql = "SELECT ar_id, ar_title, ar_date, ar_doc FROM artikel";
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
          <h5 class="card-title">Article List<span></span></h5>
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
                echo "<td>" . $event['ar_title'] . "</td>";
                echo "<td>" . $event['ar_date'] . "</td>";
                $documentPath = "../uploads/" . $event['ar_doc'];
                echo "<td><a href='" . $documentPath . "' target='_blank'>View Document</a></td>";
                echo "<td><a href='../model/edit-ar.php?ar_id=" . $event['ar_id'] . "' style='color: green;'>edit</a></td>"; 
                echo "<td><a href='../control/delete-ar.php?ar_id=" . $event['ar_id'] . "' style='color: red;'>Delete</a></td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- End Announcement list -->



</main><!-- End #main -->
<!-- ======= Footer ======= -->

</main><!-- End #main -->
<
 
 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
   <div class="copyright">
     &copy; Copyright <strong><span>Empicom</span></strong>. All Rights Reserved
   </div>
   <div class="credits">
     <!-- All the links in the footer should remain intact. -->
     <!-- You can delete the links only if you purchased the pro version. -->
     <!-- Licensing information: https://bootstrapmade.com/license/ -->
     <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
     Designed by Siniy
   </div>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="../admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
 <script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="../admin/assets/vendor/chart.js/chart.umd.js"></script>
 <script src="../admin/assets/vendor/echarts/echarts.min.js"></script>
 <script src="../admin/assets/vendor/quill/quill.min.js"></script>
 <script src="../admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
 <script src="../admin/assets/vendor/tinymce/tinymce.min.js"></script>
 <script src="../admin/assets/vendor/php-email-form/validate.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-webcomponent@2/dist/tinymce-webcomponent.min.js"></script>
HTML
copy icon
Copied!
 <!-- Include Quill script -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

 <!-- Template Main JS File -->
 <script src="../admin/assets/js/main.js"></script>

</body>

</html>