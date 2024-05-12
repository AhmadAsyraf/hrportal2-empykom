<?php
// Include your database connection file
include('dbconn.php');

// SQL query to fetch the fourth latest item from the schedule_list table
$sql = "SELECT * FROM (SELECT * FROM schedule_list ORDER BY id DESC LIMIT 6) AS recent ORDER BY id ASC LIMIT 1";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of the fourth latest row
    $row = $result->fetch_assoc();
?>
    <span class="iconbox-label inline-block absolute top-0 right-0 bg-gray-100 rounded-full font-bold uppercase tracking-0/1em text-black">New</span><br>
    <a href="uploads/<?php echo $row['cal_doc']; ?>" target="_blank" style="color: black;">
        <p><?php echo $row['title']; ?></p>
    </a>
<?php
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
<a href="uploads/<?php echo $row['cal_doc']; ?>" class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
							<span class="btn-txt" data-text="Explore More" data-transition-delay="true" data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}' data-split-text="true" data-split-options='{"type":  "chars, words"}'>Explore More</span>
							<span class="btn-icon">
								<i class="lqd-icn-ess icon-md-arrow-forward"></i>
							</span>
							<span class="btn-icon mr-10">
								<i class="lqd-icn-ess icon-md-arrow-forward"></i>
							</span>
						</a>