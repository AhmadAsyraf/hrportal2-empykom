<?php
// Include your database connection file
include('../dbconn.php');

// Check if ua_id is provided in the URL
if (isset($_GET['ua_id'])) {
    $ua_id = $_GET['ua_id'];

    // Fetch details of the admin user with the given ua_id from the database
    $sql = "SELECT * FROM user_admin WHERE ua_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $ua_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $admin = $result->fetch_assoc();
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


<?php include('header.php') ?>
<?php include('../view/admin_nav.php') ?>
<?php include('admin_menu.php') ?> 

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Update admin User Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Update admin User Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Start Disiplin list -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update admin User Data</h5>
                <!-- Your HTML code for edit form -->
        <form action="../control/edit-ua-process.php" method="POST">
            <input type="hidden" name="ua_id" value="<?php echo $admin['ua_id']; ?>">
            <!-- Other form fields with pre-populated values -->
            <div class="form-group">
                <label for="ua_username">Username:</label>
                <input type="text" name="ua_username" class="form-control" value="<?php echo $admin['ua_username']; ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label for="ua_pass_id">Staff Id:</label>
                <input type="text" name="ua_pass_id" class="form-control" value="<?php echo $admin['ua_pass_id']; ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" name="password" class="form-control" value="<?php echo $admin['password']; ?>" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
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



    <?php
    // Include your database connection file
    include('../dbconn.php');
    // Fetch admin data from the database
    $sql = "SELECT ua_id, ua_username, ua_pass_id, password
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
                                    echo "<td><a href='../control/ua-edit-process.php?ua_id=" . $admin['ua_id'] . "' style='color: green;'>edit</a></td>"; 
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
</main><!-- End #main -->
<!-- ======= Footer ======= -->  
</main><!-- End #main -->
<?php include('admin_footer.php') ?>