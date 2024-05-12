<?php
// Include your database connection file
include('../dbconn.php');

// Check if cu_id is provided in the URL
if (isset($_GET['cu_id'])) {
    $cu_id = $_GET['cu_id'];

    // Fetch details of the admin user with the given cu_id from the database
    $sql = "SELECT * FROM contact_us WHERE cu_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cu_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $contact = $result->fetch_assoc();
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
                <h1>Update Contact_Us</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Contact_Us</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <!-- Start Disiplin list -->
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Contact_Us</h5>
                        <!-- Your HTML code for edit form -->
                        <form action="../control/edit-cu-process.php" method="POST">
                            <div class="form-group">
                            <input type="hidden" name="cu_id" value="<?php echo $cu_id; ?>"> 
                                <label for="title">Admin ID:</label>
                                <input type="text" name="staff_id" class="form-control" value="<?php echo $contact['staff_id']; ?>" required>
                            </div><br>
                            <div class="form-group">
                                <label for="title">Name:</label>
                                <input type="text" name="cu_name" class="form-control" value="<?php echo $contact['cu_name']; ?>" required>
                            </div><br>
                            <div class="form-group">
                                <label for="title">Departments:</label>
                                <select name="cu_dept" class="form-control" required>
                                    <option value="">Select Category</option>
                                    <option value="Compenstion and Benefit Team" <?php if ($contact['cu_dept'] == 'Compenstion and Benefit Team') echo 'selected'; ?>>PCSCB - Compenstion and Benefit Team</option>
                                    <option value="Human Resource Management Team and GMs Office" <?php if ($contact['cu_dept'] == 'Human Resource Management Team and GMs Office') echo 'selected'; ?>>PCSCB - Human Resource Management Team and GMs Office</option>
                                    <option value="Human Resource Management System Team" <?php if ($contact['cu_dept'] == 'Human Resource Management System Team') echo 'selected'; ?>>PCSCB - Human Resource Management System Team</option>
                                    <option value="Industrial Relations Team" <?php if ($contact['cu_dept'] == 'Industrial Relations Team') echo 'selected'; ?>>PCSCB - Industrial Relations Team</option>
                                    <option value="Talent Management Team" <?php if ($contact['cu_dept'] == 'Talent Management Team') echo 'selected'; ?>>PCSCB - Talent Management Team</option>


                                    <option value="Recruitment and Manpower Planning" <?php if ($contact['cu_dept'] == 'Recruitment and Manpower Planning') echo 'selected'; ?>>PSSB - Recruitment and Manpower Planning</option>
                                    <option value="Human Resource Information System" <?php if ($contact['cu_dept'] == 'Human Resource Information System') echo 'selected'; ?>>PSSB - Human Resource Information System</option>
                                    <option value="Compensation and Benefit" <?php if ($contact['cu_dept'] == 'Compensation and Benefit') echo 'selected'; ?>>PSSB - Compensation and Benefit</option>
                                    <option value="Organization Development" <?php if ($contact['cu_dept'] == 'Organization Development') echo 'selected'; ?>>PSSB - Organization Development</option>
                                    <option value="Industrial Relation" <?php if ($contact['cu_dept'] == 'Compenstion and Benefit Team') echo 'selected'; ?>>PSSB - Industrial Relation</option>
                                    <option value="Staff Affairs" <?php if ($contact['cu_dept'] == 'Staff Affairs') echo 'selected'; ?>>PSSB - Staff Affairs</option>
                                    <option value="Admin" <?php if ($contact['cu_dept'] == 'Admin') echo 'selected'; ?>>PSSB - Admin</option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <label for="title">Section:</label>
                                <select name="cu_sect" class="form-control" required>
                                    <option value="">Select Category</option>
                                    <option value="Compenstion and Benefit" <?php if ($contact['cu_sect'] == 'Compenstion and Benefit') echo 'selected'; ?>>PSSB - Compenstion and Benefit</option>
                                    <option value="Compenstion and Benefit Mgmt" <?php if ($contact['cu_sect'] == 'Compenstion and Benefit Mgmt') echo 'selected'; ?>>PSSB - Compenstion and Benefit Mgmt</option>
                                    <option value="Employee Personnel Mgmt" <?php if ($contact['cu_sect'] == 'Employee Personnel Mgmt') echo 'selected'; ?>>PSSB - Employee Personnel Mgmt</option>
                                    <option value="Expatriates Management" <?php if ($contact['cu_sect'] == 'Expatriates Management') echo 'selected'; ?>>PSSB - Expatriates Management</option>
                                    <option value="GMs Office" <?php if ($contact['cu_sect'] == 'GMs Office') echo 'selected'; ?>>PSSB - GMs Office</option>
                                    <option value="Human Resource Management Team" <?php if ($contact['cu_sect'] == 'Human Resource Management Team') echo 'selected'; ?>>PSSB - Human Resource Management Team</option>
                                    <option value="Human Resource Management System Team" <?php if ($contact['cu_sect'] == 'Human Resource Management System Team') echo 'selected'; ?>>PSSB - Human Resource Management System Team</option>
                                    <option value="Industrial Relations" <?php if ($contact['cu_sect'] == 'Industrial Relations') echo 'selected'; ?>>PSSB - Industrial Relations</option>
                                    <option value="Manpower Planning" <?php if ($contact['cu_sect'] == 'Manpower Planning') echo 'selected'; ?>>PSSB - Manpower Planning</option>
                                    <option value="Recruitment and Onboarding" <?php if ($contact['cu_sect'] == 'Recruitment and Onboarding') echo 'selected'; ?>>PSSB - Recruitment and Onboarding</option>
                                    <option value="Staff and Benefits Administration" <?php if ($contact['cu_sect'] == 'Recruitment and Onboarding') echo 'selected'; ?>>PSSB - Recruitment and Onboarding</option>
                                    <option value="Talent Management" <?php if ($contact['cu_sect'] == 'Talent Management') echo 'selected'; ?>>PSSB - Talent Management</option>


                                    <option value="Recruitment and Manpower Planning" <?php if ($contact['cu_sect'] == 'Recruitment and Manpower Planning') echo 'selected'; ?>>PSSB - Recruitment and Manpower Planning</option>
                                    <option value="Human Resource Information System" <?php if ($contact['cu_sect'] == 'Human Resource Information System') echo 'selected'; ?>>PSSB - Human Resource Information System</option>
                                    <option value="Compensation and Benefit" <?php if ($contact['cu_sect'] == 'Compensation and Benefit') echo 'selected'; ?>>PSSB - Compensation and Benefit</option>
                                    <option value="Organization Development" <?php if ($contact['cu_sect'] == 'Organization Development') echo 'selected'; ?>>PSSB - Organization Development</option>
                                    <option value="Industrial Relation" <?php if ($contact['cu_sect'] == 'Compenstion and Benefit Team') echo 'selected'; ?>>PSSB - Industrial Relation</option>
                                    <option value="Staff Affairs" <?php if ($contact['cu_sect'] == 'Staff Affairs') echo 'selected'; ?>>PSSB - Staff Affairs</option>
                                    <option value="Admin" <?php if ($contact['cu_sect'] == 'Admin') echo 'selected'; ?>>PSSB - Admin</option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <label for="title">Position:</label>
                                <select name="cu_position" class="form-control" required>
                                    <option value="">Select Category</option>
                                    <option value="Admin Assistant" <?php if ($contact['cu_position'] == 'Admin Assistant') echo 'selected'; ?>>Admin Assistant</option>
                                    <option value="Assistant Manager" <?php if ($contact['cu_position'] == 'Assistant Manager') echo 'selected'; ?>>Assistant Manager</option>
                                    <option value="Dep General Manager" <?php if ($contact['cu_position'] == 'Dep General Manager') echo 'selected'; ?>>Dep General Manager</option>
                                    <option value="Div Exec Coordinator" <?php if ($contact['cu_position'] == 'Div Exec Coordinator') echo 'selected'; ?>>Div Exec Coordinator</option>
                                    <option value="Executive" <?php if ($contact['cu_position'] == 'Executive') echo 'selected'; ?>>Executive</option>
                                    <option value="General Manager" <?php if ($contact['cu_position'] == 'General Manager') echo 'selected'; ?>>General Manager</option>
                                    <option value="Human Resource Assistant" <?php if ($contact['cu_position'] == 'Human Resource Assistant') echo 'selected'; ?>>Human Resource Assistant</option>
                                    <option value="Human Resource Executive" <?php if ($contact['cu_position'] == 'Human Resource Executive') echo 'selected'; ?>>Human Resource Executive</option>
                                    <option value="Manager" <?php if ($contact['cu_position'] == 'Manager') echo 'selected'; ?>>Manager</option>
                                    <option value="Senior Executive" <?php if ($contact['cu_position'] == 'Senior Executive') echo 'selected'; ?>>Senior Executive</option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <label for="title">Ext:</label>
                                <input type="text" name="cu_ext" class="form-control" value="<?php echo $contact['cu_ext']; ?>" required>
                            </div><br>
                            <div class="form-group">
                            <label for="title">Category:</label>
                            <select name="cu_category" class="form-control" required>
                                <option value="">Select Category</option>
                                <option value="PSSB"<?php if ($contact['cu_category'] == 'PSSB') echo 'selected'; ?>>PSSB</option>
                                <option value="PCSB"<?php if ($contact['cu_category'] == 'PCSB') echo 'selected'; ?>>PCBC</option>
                                <option value="POSB"<?php if ($contact['cu_category'] == 'POSB') echo 'selected'; ?>>POSB</option>
                            </select>
                            </div><br> 
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                <?php
            } else {
                echo "Admin user not found.";
            }

            // Close statement
            $stmt->close();
        } else {
            echo "Admin ID not provided.";
        }

        // Close database connection
        $conn->close();
                ?>
                    </div>
                </div>
            </section>



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
        </main><!-- End #main -->
        <?php include('./admin_footer.php') ?>