
<?php include('header.php') ?>
<?php include('../view/admin_nav.php') ?>

<!-- ======= Sidebar ======= -->
<?php include('admin_menu.php') ?>
<!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Register User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Register</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Start Disiplin list -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create User Form</h5>
                <form action="../control/user-process-form.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Staff Name:</label>
                        <input type="text" name="staff_name" class="form-control" required>
                    </div><br>
                    <div class="form-group">
                        <label for="title">Staff Password:</label>
                        <input type="text" name="password" class="form-control" required>
                    </div><br>
                    <div class="form-group">
                        <label for="title">Admin ID:</label>
                        <input type="text" name="staff_id" class="form-control" required>
                    </div><br>
                    <div class="form-group">
                        <label for="title">Position:</label>
                        <select name="po_id" class="form-control" required>
                            <option value="">Select Position</option>
                            <?php
                            // Include your database connection file
                            include('dbconn.php');

                            // Fetch positions from the database excluding po_id = 1
                            $sql = "SELECT po_id, po_title FROM position_ WHERE po_id != 1";
                            $result = $conn->query($sql);

                            // Check if there are any positions in the database
                            if ($result->num_rows > 0) {
                                // Loop through each row and populate the dropdown options
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['po_id'] . "'>" . $row['po_title'] . "</option>";
                                }
                            } else {
                                // If no positions found in the database, display a message
                                echo "<option disabled>No positions found</option>";
                            }

                            // Close the database connection
                            $conn->close();
                            ?>
                        </select>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <?php
    // Include your database connection file
    include('../dbconn.php');
    // Fetch staff data from the database
    $sql = "SELECT s.staff_name, s.staff_pass_id, s.po_id, pos.po_title
        FROM staff s
        INNER JOIN position_ pos ON s.po_id = pos.po_id";
    $result = $conn->query($sql);
    // Initialize an empty array to store fetched data
    $staffs = array();
    // Check if there are any rows returned from the query
    if ($result->num_rows > 0) {
        // Loop through each row of the result set and store it in the $staffs array
        while ($row = $result->fetch_assoc()) {
            $staffs[] = $row;
        }
    }
    // Close the database connection
    $conn->close();
    ?>
    <!-- Your HTML code continues here -->
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="filter">
                <!-- Dropdown menu code omitted for brevity -->
            </div>
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Staff List</h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Staff Name</th>
                                    <th scope="col">Staff Pass ID</th>
                                    <th scope="col">Position</th> <!-- Add column for position -->
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Loop through staffs array and populate table rows
                                foreach ($staffs as $staff) {
                                    // Output table row with staff data
                                    echo "<tr>";
                                    echo "<td>" . $staff['staff_name'] . "</td>";
                                    echo "<td>" . $staff['staff_pass_id'] . "</td>";
                                    echo "<td>" . $staff['po_title'] . "</td>"; // Display position title
                                    echo "<td><a href='#' style='color: green;'>edit</a></td>";
                                    echo "<td><a href='#' style='color: red;'>delete</a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Staff list-->

</main><!-- End #main -->
<!-- ======= Footer ======= -->
<!-- ======= Footer ======= -->
<?php include('admin_footer.php') ?>