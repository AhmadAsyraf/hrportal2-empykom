<?php include ('header.php')?>
<br>
<br>
				<!-- Start How It Work -->
				<section id="li" class="lqd-section how-it-work py-90" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".animation-element","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}' data-section-luminosity="light">
					<div class="container">
						<div class="row justify-between">
							<div class="col col-12 col-md-6 col-lg-9 animation-element">
								<h2 class="ld-fh-element mb-0/5em">Bank Islam</h2>
							</div>
							<div class="col col-12 animation-element">
								<div class="w-full relative flex flex-col flex-grow-1 pt-40 pb-10 mb-15 border-bottom border-black">
									<div class="container-fluid">
										<div class="row items-center">
											<div class="col-2 animation-element">
												<div class="w-50percent relative flex border-top border-black-50"></div>
											</div>
											<div class="col-8 animation-element">
												<h6 class="ld-fh-element mb-0/5em text-12 uppercase tracking-0/01em font-normal text-black">Bank Application Fom & Flyers:</h6>
											</div>
											<div class="col col-12 col-md-2 text-end sm:text-start animation-element pr-0">
												<h6 class="ld-fh-element mb-0/5em text-12 font-normal"> 02</h6>
											</div>

										</div>
										<section class="lqd-section services pt-65 pb-50" data-section-luminosity="light">
											<div class="container">
												<div class="items-center">
													<div class="flex flex-col pr-30 pl-10percent module-col-19">
														<div class="accordion accordion-lg accordion-title-underlined  accordion-wrap mb-2em link-black">


															<?php
															include('dbconn.php');

															// Fetch unique categories from the database and sort by bk_category
															$sql_categories = "SELECT DISTINCT bk_category FROM bank WHERE bk_category = 'Bank Islam'";
															$result_categories = $conn->query($sql_categories);

															// Check if there are rows in the result set
															if ($result_categories->num_rows > 0) {
																echo '<div class="guidelines-container">';
																// Loop through the categories
																while ($row = $result_categories->fetch_assoc()) {
																	$pi_category = $row['bk_category'];

																	// Fetch data for the current category from the database, grouped by bk_year
																	$sql_titles = "SELECT bk_title, bk_doc, bk_year 
                      FROM bank 
                      WHERE bk_category = ? 
                      GROUP BY bk_year 
                      ORDER BY 
                        CAST(bk_year AS SIGNED) DESC, 
                        bk_year ASC";
																	$stmt = $conn->prepare($sql_titles);
																	$stmt->bind_param("s", $pi_category);
																	$stmt->execute();
																	$result_titles = $stmt->get_result();

																	// Output the category card
																	echo '<div class="card">';
																	echo '<div class="card-header">';
																	echo '</div>';
																	// Output the titles for the current category grouped by year
																	echo '<div class="card-body">';
																	while ($row_title = $result_titles->fetch_assoc()) {
																		$current_year = $row_title['bk_year'];
																		if (ctype_digit($current_year)) {
																			echo "<br><h5>$current_year:</h5>";
																		} else {
																			echo "<br><h5>Older:</h5>";
																		}
																		echo '<ul>';
																		// Fetch and output titles for the current category and year
																		$sql_titles_by_year = "SELECT bk_title, bk_doc FROM bank WHERE bk_category = ? AND bk_year = ?";
																		$stmt_year = $conn->prepare($sql_titles_by_year);
																		$stmt_year->bind_param("ss", $pi_category, $current_year);
																		$stmt_year->execute();
																		$result_titles_year = $stmt_year->get_result();
																		while ($row_title_year = $result_titles_year->fetch_assoc()) {
																			echo '<li>';
																			echo '<p>';
																			echo '<a style="color: red;" href="uploads/' . $row_title_year['bk_doc'] . '" target="_blank">';
																			echo '<p class="card-title">' . $row_title_year['bk_title'] . '</p>'; // Changing the color of the title to red
																			echo '</a>'; // Title with link to pi_doc
																			echo '</p>';
																			echo '</li>';
																		}
																		echo '</ul>';
																	}
																	echo '</div>'; // Close card-body
																	echo '<div class="card-footer">';
																	echo '</div>';
																	echo '</div>'; // Close card
																}
																echo '</div>'; // Close guidelines-container
															} else {
																echo '<p>No categories found.</p>';
															}

															// Close the connection
															$conn->close();
															?>







														</div>
													</div>
												</div>
											</div>
										</section>
										<!-- End Services -->
									</div>
								</div>
							</div>
						</div>
						<div style="text-align: center;">
							<a style="color: red; float: left;" href="bank_form.php">
								<< <strong>Back</strong>
							</a>
						</div>
					</div>
				</section>
				<!-- End How It Work -->

                
<?php include ('footer.php')?>