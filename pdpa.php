<?php include ('header.php')?>

	<!-- Start How It Work -->
    <section class="lqd-section how-it-work py-90" id="pdpa" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".animation-element","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}' data-section-luminosity="light">
				<div class="container">
					<div class="row justify-between">  
						<div class="col col-12 animation-element">
							<div class="w-full relative flex flex-col flex-grow-1 pt-40 pb-10 mb-15 border-bottom border-black">
								<div class="container-fluid">
									<div class="row items-center">
										<div class="col-2 animation-element">
											<div class="w-50percent relative flex border-top border-black-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						// Include your database connection file
						include 'dbconn.php';

						// Fetch data from the database
						$sql = "SELECT pd_title, pd_doc FROM pdpa";
						$result = mysqli_query($conn, $sql);

						// Check if there are any results
						if (mysqli_num_rows($result) > 0) {
							// Output data of each row
							while ($row = mysqli_fetch_assoc($result)) {
								echo '<div class="col col-12 animation-element">';
								echo '<div class="container-fluid py-35 border-bottom border-black-20">';
								echo '<div class="row items-center">';
								echo '<div class="col col-12 col-md-4 animation-element">';
								echo '<p class="ld-fh-element mb-0 text-30 font-normal module-title">' . $row["pd_title"] . '</p>';
								echo '</div>';
								echo '<div class="col col-12 col-md-6 offset-md-2 animation-element">';
								echo '<p class="ld-fh-element mb-0/5em text-20 font-normal sm:mb-0">';
								// Output the title as a link that opens in a new tab
								echo '<a href="javascript:void(0);" onclick="window.open(\'uploads/' . $row["pd_doc"] . '\', \'_blank\')">' . $row["pd_title"] . '</a>';
								echo '</p>';
								echo '</div>';
								echo '</div>';
								echo '</div>';
								echo '</div>';
							}
						} else {
							echo "0 results";
						}

						// Close the database connection
						mysqli_close($conn);
						?>
                        <br><br>
                          <div style="text-align: center;">
                            <a style="color: red; float: left;" href="essential_hub.php">
                                << <strong>Exit </strong> 
                            </a>
                        </div>
					</div>
				</div>
			</section>
			<!-- End How It Work -->
          

<?php include ('footer.php')?>