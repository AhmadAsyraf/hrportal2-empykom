<?php
    // Include your database connection file
    include('../dbconn.php');
    // Fetch admin data from the database
    $sql = "SELECT ua_username, ua_pass_id, password
        FROM user_admin";
    $result = $conn->query($sql);
    // Initialize an empty array to store fetched data
    $admins = array();
    // Check if there are any rows returned from the query
    if ($result->num_rows > 0) {
        // Loop through each row of the result set and store it in the $admins array
        while ($row = $result->fetch_assoc()) {
            $admins[] = $row;
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
                        <h5 class="card-title">Admin List</h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Staff Id</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Loop through admins array and populate table rows
                                foreach ($admins as $admin) {
                                    // Output table row with admin data
                                    echo "<tr>";
                                    echo "<td>" . $admin['ua_username'] . "</td>";
                                    echo "<td>" . $admin['ua_pass_id'] . "</td>";
                                    echo "<td>" . $admin['password'] . "</td>";
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
    </div><!-- End Admin list-->