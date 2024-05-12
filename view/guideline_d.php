<?php
								include('dbconn.php'); // Include database connection parameters

								try {
									// Establish a database connection
									$conn = new mysqli($host, $username, $password, $database);

									// Check connection
									if ($conn->connect_error) {
										throw new Exception("Connection failed: " . $conn->connect_error);
									}

									// Your SQL query to retrieve data, including the d_doc column
									$sql = "SELECT d_title, d_doc FROM disiplin WHERE d_category='Panduan Tindakkan Disiplin' ORDER BY d_id ASC";

									$stmt = $conn->prepare($sql);
									$stmt->execute();

									$results = $stmt->get_result(); // Fetch results as object
									$results = $results->fetch_all(MYSQLI_ASSOC);

									if ($results) {
										echo '<div class="guidelines-container">';
										foreach ($results as $row) {
											$an_title = $row['d_title'];
											$d_doc = $row['d_doc']; // Access the d_doc key now

											echo '<div class="card">';
											echo '  <div class="card-header">';
											echo '    <h3 class="card-title" style="color: red">';
											echo '<span class="iconbox-icon-container mb-30 text-50 leading-1em text-primary transition-all">
                        <i class="lqd-icn-ess icon-lqd-mobile"></i>
                      </span>';
											//echo '      <span class="card-number">' . str_pad((string) (array_search($row, $results) + 1), 2, '0', STR_PAD_LEFT) . '&nbsp;&nbsp; </span>'; // Add numbering (PT-01 format)
											echo '      <a href="#" style="color: black;" onclick="window.open(\'uploads/' . $d_doc . '\', \'_blank\')">' . $an_title . '</a>';
											echo '    </h3>';
											echo '  </div>';
											// Add a preview section if needed
											// echo '  <div class="card-body">';
											// echo '    <p class="card-preview">...</p>'; // Add preview logic here
											// echo '  </div>';
											echo '  <div class="card-footer">';
											echo '  </div>';
											echo '</div>';
										}
										echo '</div>';
									} else {
										echo '<p>No results found for "Panduan Tindakkan Disiplin".</p>';
									}

									// Close the connection
									$conn->close();
								} catch (Exception $e) {
									echo "Database error: " . $e->getMessage();
								}
								?>