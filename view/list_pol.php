
<!-- End list -->
<?php 
// Include your database connection file
include('./dbconn.php');

// Fetch policy data from the database along with corresponding position title
$sql = "SELECT p.p_title, p.p_category, p.p_description, p.p_polisi, p.p_date, p.po_id, pos.po_title
        FROM policy p
        INNER JOIN position_ pos ON p.po_id = pos.po_id";
$result = $conn->query($sql);

// Initialize an empty array to store fetched data
$policies = array();

// Check if there are any rows returned from the query
if ($result->num_rows > 0) {
    // Loop through each row of the result set and store it in the $policies array
    while ($row = $result->fetch_assoc()) {
        $policies[] = $row;
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
                    <h5 class="card-title">Policy List</h5>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Title</th> 
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Polisi</th>
                                <th scope="col">Date</th>
                                <th scope="col">Position</th> <!-- Add column for position -->
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Loop through policies array and populate table rows
                            foreach ($policies as $policy) {
                                // Output table row with policy data
                                echo "<tr>";
                                echo "<td>" . $policy['p_title'] . "</td>"; 
                                echo "<td>" . $policy['p_category'] . "</td>";
                                echo "<td>" . $policy['p_description'] . "</td>"; 
                                echo "<td>" . $policy['p_polisi'] . "</td>";
                                echo "<td>" . $policy['p_date'] . "</td>";
                                echo "<td>" . $policy['po_title'] . "</td>"; // Display position title
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
</div><!-- End Policy list-->