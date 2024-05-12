<?php include('header.php')?>

<?php include('../view/admin_nav.php') ?>
 <!-- ======= Sidebar ======= -->
 <?php include('admin_menu.php')?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact Us</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Contact Us</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <!-- Start Disiplin list -->
    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Contact Us Form</h5>
          <form action="../control/cu-process-form.php" method="post" enctype="multipart/form-data"> 
          <div class="form-group">
            <label for="title">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" required>
          </div><br> 
            <div class="form-group">
              <label for="title">Name:</label>
              <input type="text" name="cu_name" class="form-control" required>
            </div><br> 
            <div class="form-group">
              <label for="title">Departments:</label>
              <select name="cu_dept" class="form-control" required>
                <option value="">Select Category</option>
                <option value="Compenstion & Benefit Team">PCSB - Compenstion & Benefit Team</option>
                <option value="Human Resource Management Team & GM's Office">PCSB - Human Resource Management Team & GM's Office</option>
                <option value="Human Resource Management System Team">PCSB - Human Resource Management System Team</option>
                <option value="Industrial Relations Team">PCSB - Industrial Relations Team</option>
                <option value="Talent Management Team">PCSB - Talent Management Team</option>  
                <option value="Recruitment and Manpower Planning">PSSB - Recruitment and Manpower Planning</option>
                <option value="Human Resource Information System">PSSB - Human Resource Information System</option>
                <option value="Compensation and Benefit">PSSB - Compensation and Benefit</option>
                <option value="Organization Development">PSSB - Organization Development</option>
                <option value="Industrial Relation">PSSB - Industrial Relation</option>
                <option value="Staff Affairs">PSSB - Staff Affairs</option> 
                <option value="Admin">PSSB - Admin</option>  
              </select>
            </div><br> 
            <div class="form-group">
              <label for="title">Section:</label>
              <select name="cu_sect" class="form-control" required>
                <option value="">Select Category</option>
                <option value="Compenstion & Benefit">Compenstion & Benefit</option>
                <option value="Compenstion & Benefit Mgmt">Compenstion & Benefit Mgmt</option> 
                <option value="Employee Personnel Mgmt">Employee Personnel Mgmt</option>
                <option value="Expatriates Management">Expatriates Management</option>
                <option value="GM's Office">GM's Office</option>
                <option value="Human Resource Management Team">Human Resource Management Team</option>
                <option value="Human Resource Management System Team">Human Resource Management System Team</option>
                <option value="Industrial Relations">Industrial Relations</option>
                <option value="Manpower Planning">Manpower Planning</option>
                <option value="Recruitment & Onboarding">Recruitment & Onboarding</option>
                <option value="Staff & Benefits Administration">Staff & Benefits Administration</option>
                <option value="Talent Management">Talent Management</option>  
                <option value="Recruitment and Manpower Planning">PSSB - Recruitment and Manpower Planning</option>
                <option value="Human Resource Information System">PSSB - Human Resource Information System</option>
                <option value="Compensation and Benefit">PSSB - Compensation and Benefit</option>
                <option value="Organization Development">PSSB - Organization Development</option>
                <option value="Industrial Relation">PSSB - Industrial Relation</option>
                <option value="Staff Affairs">PSSB - Staff Affairs</option> 
                <option value="Admin">PSSB - Admin</option> 
              </select>
            </div><br> 
            <div class="form-group">
              <label for="title">Position:</label>
              <select name="cu_position" class="form-control" required>
                <option value="">Select Category</option>
                <option value="Admin Assistant">Admin Assistant </option>
                <option value="Assistant Manager">Assistant Manager</option>
                <option value="Dep General Manager">Dep General Manager </option>
                <option value="Div Exec Coordinator">Div Exec Coordinator </option>
                <option value="Executive">Executive </option>
                <option value="General Manager">General Manager </option>
                <option value="Human Resource Assistant">Human Resource Assistant </option>
                <option value="Human Resource Executive">Human Resource Executive </option>
                <option value="Manager">Manager </option>
                <option value="Senior Executive">Senior Executive </option> 
              </select>
            </div><br> 
            <div class="form-group">
              <label for="title">Ext:</label>
              <input type="text" name="cu_ext" class="form-control" required>
            </div><br> 
            <div class="form-group">
              <label for="title">Category:</label>
              <select name="cu_category" class="form-control" required>
                <option value="">Select Category</option>
                <option value="PSSB">PSSB </option>
                <option value="PCBC">PCBC </option>
                <option value="POSB">POSB </option> 
              </select>
            </div><br> 
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form> 
        </div>
      </div>
    </section> 
    <!-- Start Calendar list -->


    <!-- Start pdpa list -->
    <?php
    // Include your database connection file
    include('../dbconn.php');

    // Fetch events data from the database
    $sql = "SELECT cu_id, cu_dept,	cu_sect,	cu_name,  cu_position,	cu_ext	 FROM contact_us                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ";
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
          <h5 class="card-title">Contact Us <span></span></h5>
          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Section</th>
                <th scope="col">Department</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
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
                echo "<td>" . $event['cu_name'] . "</a></td>"; 
                echo "<td>" . $event['cu_sect'] . "</td>";
                echo "<td>" . $event['cu_dept'] . "</td>";
                echo "<td>" . $event['cu_position'] . "</td>";
                echo "<td>" . $event['cu_ext'] . "</td>";
                echo "<td><a href='../model/edit-cu.php?cu_id=" . $event['cu_id'] . "' style='color: green;'>edit</a></td>";
                echo "<td><a href='../control/delete-cu.php?cu_id=" . $event['cu_id'] . "' style='color: red;'>Delete</a></td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <?php include('admin_footer.php')?>





    