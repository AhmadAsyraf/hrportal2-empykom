
    <!-- Start Announcement list -->

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
                echo "<td><a href='#' style='color: green;'>Update</a></td>"; 
                echo "<td><a href='../control/delete-ak.php?ar_id=" . $event['ar_id'] . "' style='color: red;'>Delete</a></td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- End Announcement list -->
