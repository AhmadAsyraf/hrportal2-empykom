<br>
<?php
include('dbconn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['query'])) {
    // Sanitize the search query
    $search_query = trim($_POST['query']);

    // Perform database search based on the query
    // Example: Assuming 'bborang' is the table name and 'bb_title' is the column to search
    $sql_search = "SELECT * FROM prosedur WHERE pro_title LIKE '%" . $search_query . "%'";
    $result_search = $conn->query($sql_search);

    // Display search results in a table
    if ($result_search->num_rows > 0) {
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Title</th>';
        echo '<th>Document</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        while ($row = $result_search->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['pro_title'] . '</td>';
            echo '<td><a href="uploads/' . $row['pro_doc'] . '" target="_blank">' . $row['pro_doc'] . '</a></td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo 'No results found.';
    }

    // Close the database connection
    $conn->close();
} else {
    echo 'Invalid request.';
}
?>
