<?php
// Include your database connection file
include('dbconn.php');

// SQL query to fetch the latest 3 slider items
$sql = "SELECT sl_doc FROM slider ORDER BY sl_id DESC LIMIT 3";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    echo '<div class="sl-container" style="position: relative; max-width: 100%; overflow: hidden;">';
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Determine the media type based on file extension
        $file_extension = strtolower(pathinfo($row['sl_doc'], PATHINFO_EXTENSION));
        if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif'))) {
            // Display image
            echo '<img class="mySlides" src="uploads/' . $row["sl_doc"] . '" alt="Slide" style="max-width: auto; height: auto;">';
        } elseif (in_array($file_extension, array('mp4', 'avi', 'mov', 'wmv'))) {
            // Display video
            echo '<video class="mySlides" controls style="max-width: 100%; height: auto;">';
            echo '<source src="uploads/' . $row["sl_doc"] . '" type="video/mp4">';
            echo 'Your browser does not support the video tag.';
            echo '</video>';
        }
    }
    echo '<div class="sl-prev" onclick="plusDivs(-1)"> </div>';
    echo '<div class="sl-next" onclick="plusDivs(1)"> </div>';
    echo '<div style="text-align:center; position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">';
    for ($i = 1; $i <= $result->num_rows; $i++) {
        echo '<span class="sl-dot" onclick="currentDiv(' . $i . ')"></span>';
    }
    echo '</div>';
    echo '</div>';
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
  <script>
									var slideIndex = 1;
									showDivs(slideIndex);

									function plusDivs(n) {
										showDivs(slideIndex += n);
									}

									function currentDiv(n) {
										showDivs(slideIndex = n);
									}

									function showDivs(n) {
										var i;
										var x = document.getElementsByClassName("mySlides");
										var dots = document.getElementsByClassName("sl-dot");
										if (n > x.length) {
											slideIndex = 1
										}
										if (n < 1) {
											slideIndex = x.length
										}
										for (i = 0; i < x.length; i++) {
											x[i].style.display = "none";
										}
										for (i = 0; i < dots.length; i++) {
											dots[i].classList.remove("active");
										}
										x[slideIndex - 1].style.display = "block";
										dots[slideIndex - 1].classList.add("active");
									}

									// Auto play function
									var autoPlayInterval;

									function startAutoPlay() {
										autoPlayInterval = setInterval(function() {
											plusDivs(1);
										}, 3000); // Change autoplay interval as needed (2000 milliseconds = 2 seconds)
									}

									function stopAutoPlay() {
										clearInterval(autoPlayInterval);
									}

									// Start autoplay
									startAutoPlay();

									// Stop autoplay on mouseover
									document.querySelector('.sl-container').addEventListener('mouseenter', stopAutoPlay);

									// Restart autoplay on mouseleave
									document.querySelector('.sl-container').addEventListener('mouseleave', startAutoPlay);
								</script>
