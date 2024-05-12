<?php include('header.php') ?>
<!-- Start Process -->
<section class="lqd-section process pt-150 pb-120 bg-gray-900" id="rules" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".animation-element, .iconbox","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"x":30,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"x":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}' data-section-luminosity="dark">
	<div class="container">
		<div class="row">
			<span class="iconbox-icon-container mb-55 text-52 text-black">
				<i class="lqd-icn-ess icon-lqd-tools"></i>
			</span>
			<h2 class=" text-25	  text-black"> &emsp; Basic Rules</h2>
			<div class="col col-12 col-md-6 col-lg-4 self-end animation-element">
				<br>
			</div>
			<?php
			// Assuming you have already established a database connection and retrieved the titles from your database
			include('dbconn.php');

			// Your SQL query to retrieve data, including the br_title and br_doc columns, ordered by br_id in descending order
			$sql = "SELECT br_title, br_doc FROM brules ORDER BY br_id DESC";

			// Execute the query
			$result = mysqli_query($conn, $sql);

			// Check if there are any results
			if (mysqli_num_rows($result) > 0) {
				// Loop through each row to fetch data
				while ($row = mysqli_fetch_assoc($result)) {
					// Fetch data from the row
					$br_title = $row['br_title'];
					$br_doc = $row['br_doc'];
			?>
					<div class="col col-12 col-lg-5"> <br><br>
						<a href="#" onclick="window.open('uploads/<?php echo $br_doc; ?>', '_blank');" style="color: black;">
							<div class="w-full relative flex flex-col justify-center border-3 border-black-20 pt-25 pb-25 px-55 mb-5 module-icon-box">
								<div class="iconbox relative flex-col items-start justify-center text-start" data-animate-icon="true" data-plugin-options='{"color" : "rgb(255, 255, 255)"}'>
									<div class="contents">
										<h3 class="font-semibold uppercase mb-10 text-20 text-black"><?php echo $br_title; ?></h3>
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
		</div>
	</div>
	</div>
</section>
<!-- End Process -->


<?php include('footer.php') ?>