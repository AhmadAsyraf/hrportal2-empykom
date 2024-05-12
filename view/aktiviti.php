<style>
 /* Define the initial background color */
.module-icon-box {
    background-color: transparent;
    transition: background-color 0.3s ease; /* Add transition for smooth color change */
}

.box-link:hover[data-color="orange"] .module-icon-box {
    background-color: rgba(255, 165, 0, 0.4); /* Red color with 40% transparency */
}
/* Define background colors with 40% transparency based on data-color attribute */
.box-link:hover[data-color="red"] .module-icon-box {
    background-color: rgba(255, 0, 0, 0.4); /* Red color with 40% transparency */
}

.box-link:hover[data-color="blue"] .module-icon-box {
    background-color: rgba(0, 0, 255, 0.4); /* Blue color with 40% transparency */
}

.box-link:hover[data-color="green"] .module-icon-box {
    background-color: rgba(0, 255, 0, 0.4); /* Green color with 40% transparency */
} 
</style>

<?php
// Assuming you have already established a database connection and retrieved the titles from your database
include('dbconn.php');
// Your SQL query to retrieve distinct 'ak_title' values sorted by 'ak_year'
$sql_titles = "SELECT DISTINCT ak_title, ak_year FROM aktiviti ORDER BY ak_year DESC";
$result_titles = mysqli_query($conn, $sql_titles);
// Check if there are any titles
if (mysqli_num_rows($result_titles) > 0) {
    // Loop through each 'ak_title'
    while ($row_title = mysqli_fetch_assoc($result_titles)) {
        // Fetch the 'ak_title' and 'ak_year'
        $ak_title = $row_title['ak_title'];
        $ak_year = $row_title['ak_year'];
        // Output the container for the 'ak_title' and 'ak_year' with onclick event to open popup
?>
          <div class="col col-6 col-lg-4 box-link" data-color="orange"> <!-- Added box-link class and data-color attribute -->
            <br><br>
            <a href="popup.php?ak_title=<?php echo urlencode($ak_title); ?>" style="color: black;">
                <div class="w-full relative flex flex-col justify-center border-5 border-black-20 pt-65 pb-50 px-55 mb- 10 module-icon-box">
                    <div class="iconbox relative flex-col items-start justify-center text-start" data-animate-icon="true" data-plugin-options='{"color" : "rgb(255, 255, 255)"}'>
                        <div class="contents">
                            <h3 class="uppercase mb-10 text-15 text-black"><?php echo $ak_title; ?>&nbsp;<?php echo $ak_year; ?></h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
<?php
    }
} else {
    echo "No results found";
}
// Close the database connection
mysqli_close($conn);
?>