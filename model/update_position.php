
<?php include('header.php') ?>
<?php include('../view/admin_nav.php') ?>
<!-- ======= Sidebar ======= -->
<?php include('admin_menu.php') ?>
<!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Create Position</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Position</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <!-- Start Disiplin list -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Position</h5>
                <form action="../control/po-process-form.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Position Title:</label>
                        <input type="text" name="po_title" class="form-control" required>
                    </div><br>
                    <div class="form-group">
                        <label for="title">Position Gred:</label>
                        <input type="text" name="po_gred" class="form-control" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Start Calendar list -->

    <!-- Start Position List -->
    <?php
    // Include your database connection file
    include('../dbconn.php'); 
    // Fetch position data from the database
    $sql = "SELECT po_title, po_gred FROM position_";
    $result = $conn->query($sql); 
    // Store the fetched data in an array
    $positions = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $positions[] = $row;
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
                <h5 class="card-title">Position List <span></span></h5>
                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">Position Title</th>
                            <th scope="col">Position Gred</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Loop through positions array and populate table rows
                        foreach ($positions as $position) {
                            // Output table row with position data
                            echo "<tr>";
                            echo "<td>" . $position['po_title'] . "</td>";
                            echo "<td>" . $position['po_gred'] . "</td>";
                            echo "<td><a href='#' style='color: green;'>edit</a></td>";
                            echo "<td><a href='#' style='color: red;'>delete</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- End Position List -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<!-- ======= Footer ======= -->
<?php include('admin_footer.php') ?>