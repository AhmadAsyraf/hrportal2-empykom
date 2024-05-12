
    <!-- Start buletinIR -->
    <?php
    // Database connection parameters
   include('dbconn.php');
    // Fetch events data from the database
    $sql = "SELECT ir_title, ir_year, ir_doc  FROM buletin_ir";
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
                $documentPath = "uploads/" . $event['ir_doc'];
                echo "<td><a href='" . $documentPath . "' target='_blank'>View Document</a></td>";
                echo "<td><a href='#' style='color: green;'>edit</a></td>";
                echo "<td><a href='#' style='color: red;'>delete</a></td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- End Buletin IRt-->