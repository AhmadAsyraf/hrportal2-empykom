<?php include('header.php') ?>

<?php include('../view/admin_nav.php') ?>

<!-- ======= Sidebar ======= -->
<?php include('admin_menu.php') ?>
<!-- End Sidebar-->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Create Discipline content</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Discipline</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Start Disiplin list -->
  <section class="section">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Discipline Form</h5>
        <form action="../control/process-form.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="title">Category:</label>
            <select name="d_category" class="form-control" required>
              <option value="">Select Category</option>
              <option value="Kod Perlakuan">Kod Perlakuan</option>
              <option value="Prosedur Disiplin">Prosedur Disiplin</option>
              <option value="Panduan Tindakkan Disiplin">Panduan Tindakkan Disiplin</option>
              <option value="Rekod Disiplin Bulanan">Rekod Disiplin Bulanan</option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="d_title" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="image">Upload File:</label>
            <input type="file" name="d_doc" class="form-control-file" accept="image/*">
          </div><br>
          <div class="form-group">
            <label for="publish_date">Publish Date:</label>
            <input type="date" name="d_date" class="form-control" required><br>
          </div> 
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
<!-- ======= Footer ======= -->
<!-- ======= Footer ======= -->
<?php include('admin_footer.php') ?>