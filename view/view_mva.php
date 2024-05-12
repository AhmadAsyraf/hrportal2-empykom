<?php
									include('dbconn.php');

									// Fetch unique categories from the database and sort by pi_category
									$sql_categories = "SELECT DISTINCT ms_category FROM message_ WHERE ms_category = 'MVA Message'";
									$result_categories = $conn->query($sql_categories);

									// Check if there are rows in the result set
									if ($result_categories->num_rows > 0) {
										echo '<div class="guidelines-container">';
										// Loop through the categories
										while ($row = $result_categories->fetch_assoc()) {
											$pi_category = $row['ms_category'];

											// Fetch data for the current category from the database
											$sql_titles = "SELECT ms_title, ms_vol, ms_doc FROM message_ WHERE ms_category = ?";
											$stmt = $conn->prepare($sql_titles);
											$stmt->bind_param("s", $pi_category);
											$stmt->execute();
											$result_titles = $stmt->get_result();

											// Output the category card
											echo '<div class="card">';
											echo '<div class="card-header">';
											echo '</div>';
											echo '<h3> MVA Message'.'</h3>';
											// Output the titles for the current category
											echo '<div class="card-body">';
											while ($row_title = $result_titles->fetch_assoc()) {
												
												echo '<ul>';
												echo '<li>';
												echo '<p>';
												echo '<a style="color: red;" href="uploads/' . $row_title['ms_doc'] . '" target="_blank">';
												echo '<p class="card-title" >' . $row_title['ms_title'] . '&emsp;' . $row_title['ms_vol'] . '</p>'; // Changing the color of the title to red
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