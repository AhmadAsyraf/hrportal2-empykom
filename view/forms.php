
<?php
															include('dbconn.php');

															 	
															// Fetch unique categories from the database and sort by pro_category
															$sql_categories = "SELECT DISTINCT bb_category FROM bborang ORDER BY bb_category";
															$result_categories = $conn->query($sql_categories);

															// Check if there are rows in the result set
															if ($result_categories->num_rows > 0) {
																// Output JavaScript script to handle accordion behavior
																echo '<script>';
																echo 'document.addEventListener("DOMContentLoaded", function() {';
																echo 'var accordionItems = document.querySelectorAll(".accordion-btn");';
																echo 'accordionItems.forEach(function(item) {';
																echo 'item.addEventListener("click", function() {';
																echo 'this.closest(".accordion-item").classList.toggle("expanded");';
																echo '});';
																echo '});';
																echo '});';
																echo '</script>';

																// Custom CSS for title color
																echo '<style>';
																echo '.accordion-title .title-link { color: red; }'; // Updated selector
																echo '</style>';

																// Loop through the categories
																while ($row_category = $result_categories->fetch_assoc()) {
																	// Output the accordion item for each category
																	echo '<div class="accordion-item panel mb-0 expanded">'; // Add 'expanded' class
																	echo '<div class="accordion-heading" id="heading_' . $row_category['bb_category'] . '" data-id="' . $row_category['bb_category'] . '">';
																	echo '<h2 class="accordion-title text-20 font-normal tracking-0" data-controls="' . $row_category['bb_category'] . '">';
																	echo '<a class="title-link accordion-btn" data-bs-toggle="collapse" href="#' . $row_category['bb_category'] . '" aria-expanded="true" aria-controls="' . $row_category['bb_category'] . '">'; // Set aria-expanded="true"
																	echo '<span> ' . $row_category['bb_category'] . '</span>';//edit title
																	echo '<span class="accordion-expander">';
																	echo '<i class="lqd-icn-ess icon-ion-ios-add"></i>';
																	echo '<i class="lqd-icn-ess icon-ion-ios-remove"></i>';
																	echo '</span>';
																	echo '</a>';    
																	echo '</h2>';
																	echo '</div>';
																	echo '<div id="' . $row_category['bb_category'] . '" class="accordion-collapse collapse show" data-bs-parent="#accordion-wrap" aria-labelledby="heading_' . $row_category['bb_category'] . '">'; // Add 'show' class
																	echo '<div class="accordion-content">';
																	echo '<div class="ld-fancy-heading">';
																	echo '<div class="one-bullet-list mb-1em">';
																	echo '<ul class="reset-ul">';

																	// Fetch data for the current category from the database
																	$sql_titles = "SELECT bb_title, bb_doc FROM bborang WHERE bb_category = '" . $row_category['bb_category'] . "' ORDER BY bb_category";
																	$result_titles = $conn->query($sql_titles);

																	// Check if there are rows in the result set for titles
																	if ($result_titles->num_rows > 0) {
																		// Loop through the titles for the current category
																		while ($row_title = $result_titles->fetch_assoc()) {
																			// Output the title as a list item
																			echo '<li class="flex items-center mb-5 text-16 leading-1/5em text-gray-600">';
																			echo '<a href="uploads/' . $row_title['bb_doc'] . '" target="_blank">' . $row_title['bb_title'] . '</a>';
																			echo '</li>';
																		}
																	} else {
																		// If no titles found for the current category
																		echo '<li>No titles found for this category</li>';
																	}

																	// Close the HTML elements for the current category
																	echo '</ul>';
																	echo '</div>';
																	echo '</div>';
																	echo '</div>';
																	echo '</div>';
																	echo '</div>';
																}
															} else {
																// If no categories found
																echo "No categories found";
															}

															// Close the database connection
															$conn->close();
															?>