<?php include('header.php') ?>
<?php include('../view/admin_nav.php') ?>

<!-- ======= Sidebar ======= -->
<?php include('admin_menu.php') ?>
<!-- End Sidebar-->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Organization chart Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Organization chart </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Start prosedur list -->
  <section class="section">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Organization chart Form</h5>
        <form action="../control/or-process-form.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="title">Document Title:</label>
            <input type="text" name="or_title" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="title">Category:</label>
            <select name="or_category" class="form-control" required>
              <option value="">Select Category</option>
              <option value="PCSB">PCSB</option>
              <option value="PSSB">PSSB</option>
              <option value="POSB">POSB</option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="image">Upload File:</label>
            <input type="file" name="or_doc" class="form-control-file" accept="file/*">
          </div><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
      </div>
    </div>
  </section> 
  <!-- End list -->
 
<!-- Start pdpa list -->
<?php
 // Include your database connection file
 include('../dbconn.php');
 
// Fetch events data from the database
$sql = "SELECT or_id, or_title, or_category, or_doc FROM orga                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ";
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
              <h5 class="card-title">Penjawatan <span></span></h5>
              <table class="table table-borderless datatable">
                  <thead>
                      <tr>
                          <th scope="col">Title</th>
                          <th scope="col">Category</th>
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
                      echo "<td>" . $event['or_title'] . "</td>";
                      echo "<td>" . $event['or_category'] . "</td>";
                      $documentPath = "../uploads/" . $event['or_doc'];
                      echo "<td><a href='" . $documentPath . "' target='_blank'>View Document</a></td>";;
                      echo "<td><a href='../model/edit-or.php?or_id=" . $event['or_id'] . "' style='color: green;'>edit</a></td>"; 
                      echo "<td><a href='../control/delete-or.php?or_id=" . $event['or_id'] . "' style='color: red;'>Delete</a></td>";
                      echo "</tr>";
                  }

                      ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div><!-- End pdpa list-->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<!-- ======= Footer ======= -->
<?php include('admin_footer.php') ?>