<?php include('header.php') ?>
 
 <br>
<section id="ip" class="lqd-section how-it-work py-90" style="margin-top: 20px;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".animation-element","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}' data-section-luminosity="light">
 <div class="container">
        <div class="row justify-between">
            <div class="col col-12 col-md-6 col-lg-9 animation-element">
                <h2 class="ld-fh-element mb-0/5em">Recruitment</h2>
            </div>
            <div class="col col-12 animation-element">
                <div class="w-full relative flex flex-col flex-grow-1 pt-40 pb-10 mb-15 border-bottom border-black">
                    <div class="container-fluid">
                        <div class="row items-center">
                            <div class="col-2 animation-element">
                                <div class="w-50percent relative flex border-top border-black-50"></div>
                            </div>
                            <div class="col-8 animation-element">
                                <h6 class="ld-fh-element mb-0/5em text-12 uppercase tracking-0/01em font-normal text-black">Recruitment</h6>
                            </div>
                            <div class="col col-12 col-md-2 text-end sm:text-start animation-element pr-0">
                                <h6 class="ld-fh-element mb-0/5em text-12 font-normal"> 01</h6>
                            </div>

                        </div>
                        <section class="lqd-section services pt-65 pb-50" data-section-luminosity="light">
											<div class="container">
												<div class="items-center">
													<div class="flex flex-col pr-30 pl-5percent module-col-19">
														<div class="accordion accordion-lg accordion-title-underlined  accordion-wrap mb-2em link-black">
														<h5>Recruitment of new staff is carried out based on the Department's application through the Workforce Application Form (MRF) and is subject to:</h5><br>
														<ul>
															<li>
																<p>Approved manpower budget.</p>
															</li>
															<li>
																<p>Latest vacancies.</p>
															</li>
															<li>
																<p>Approval from Executive Director / Managing Director</p>
															</li>	
														</ul><br>
														<h5>Recruitment of new staff is made every quarter as follows: </h5><br>
														<ul>
															<li>
																<p>First    quarter     of  February.</p>
															</li>
															<li>
																<p>Second   quarter     of  May.</p>
															</li>
															<li>
                                                                <p>Third   quarter      of  August.</p>
															</li>
															<li>
																<p>Fourth   quarter     of  November.</p>
															</li>
														</ul><br>
														<h5>All MRFs must be submitted to the Human Resources Department at least two (2) months before the hiring date. </h5><br>
														 
														
														<h5>Recruitment :</h5>
														<?php
															include('dbconn.php');

															// Fetch unique categories from the database and sort by pi_category
															$sql_categories = "SELECT DISTINCT pi_category FROM pro_induksi WHERE pi_category = 'Pengambilan Pekerja'";
															$result_categories = $conn->query($sql_categories);

															// Check if there are rows in the result set
															if ($result_categories->num_rows > 0) {
																echo '<div class="guidelines-container">';
																// Loop through the categories
																while ($row = $result_categories->fetch_assoc()) {
																	$pi_category = $row['pi_category'];

																	// Fetch data for the current category from the database
																	$sql_titles = "SELECT pi_title, pi_doc FROM pro_induksi WHERE pi_category = ?";
																	$stmt = $conn->prepare($sql_titles);
																	$stmt->bind_param("s", $pi_category);
																	$stmt->execute();
																	$result_titles = $stmt->get_result();

																	// Output the category card
																	echo '<div class="card">';
																	echo '<div class="card-header">';
																	echo '</div>';
																	// Output the titles for the current category
																	echo '<div class="card-body">';
																	while ($row_title = $result_titles->fetch_assoc()) {
																		echo '<ul>';
																		echo '<li>';
																		echo '<p>';
																		echo '<a style="color: red;" href="uploads/' . $row_title['pi_doc'] . '" target="_blank">';  
																		echo '<p class="card-title" >' . $row_title['pi_title'] . '</p>'; // Changing the color of the title to red
																		echo '</a>'; // Title with link to pi_doc
																		echo '</p>';
																		echo '</li>';
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
                        <!-- End Services -->
                    </div>
                </div>
            </div>
			<div style="display: flex; justify-content: flex-start;">
                <a href="employment.php" class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
                    <span class="btn-txt" data-text="<< Back" data-transition-delay="true" data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}' data-split-text="true" data-split-options='{"type":  "chars, words"}'>
                        << Back</span>
                            <span class="btn-icon">
                                <i class="lqd-icn-ess icon-md-arrow-backward"></i>
                            </span>
                            <span class="btn-icon mr-10">
                                <i class="lqd-icn-ess icon-md-arrow-backward"></i>
                            </span>
                    </span>
                </a>
            </div>
        </div> 
    </div>
</section>
<!-- End How It Work -->

<?php include('footer.php') ?>