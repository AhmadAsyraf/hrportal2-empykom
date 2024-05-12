<?php
									// Include database connection parameters
									include('dbconn.php');

									try {
										// Establish a database connection
										$conn = new mysqli($host, $username, $password, $database);

										// Check connection
										if ($conn->connect_error) {
											throw new Exception("Connection failed: " . $conn->connect_error);
										}

										// Your SQL query to retrieve data with filtering
										$sql = "SELECT * FROM disiplin WHERE d_category='Kod Perlakuan' ORDER BY d_id ASC";

										$stmt = $conn->prepare($sql);
										$stmt->execute();

										$results = $stmt->get_result(); // Fetch results as object
										$results = $results->fetch_all(MYSQLI_ASSOC);

										if ($results) {
											$count = 1;
											foreach ($results as $row) {
												$an_title = $row['d_title']; // Assuming 'an_title' is the title column name
												$an_image = $row['d_doc']; // Assuming 'an_image' is the image column name (optional)

												$output = '<div class="col col-12 col-md-4">';
												$output .= '  <div class="w-full relative flex flex-col flex-grow-1 pr-25percent mb-15 lg:pr-0">';
												$output .= '    <div class="ld-fancy-heading ld-fh-pos-abs lqd-exclude-parent-ca ld-fh-outline ld-fh-outline-static relative z-0">';
												$output .= '      <p class="ld-fh-element absolute -top-0/1em right-0 mb-0/5em text-150 leading-1em text-transparent">';
												$output .= '        <span class="ld-fh-txt-outline">' . $count . '</span>';
												$output .= '        ' . $count; // Alternative numbering approach
												$output .= '      </p>';
												$output .= '    </div>';
												$output .= '    <p class="ld-fh-element relative mb-0/5em text-10 uppercase tracking-0/1em text-black"> Perkara ' . $count . '</p>';
												$output .= '    <h5><a href="#" style="color: red;" onclick="window.open(\'uploads/' . $row["d_doc"] . '\', \'_blank\')">' . $row["d_title"] . '</a></h5>'; // Use retrieved title
												$output .= '    <div class="ld-fh-element relative"></div>'; // Assuming this is needed
												$output .= '  </div>';
												$output .= '</div>';

												echo $output;

												$count++;
											}
										} else {
											echo '<p>No results found.</p>';
										}

										// Close the connection
										$conn->close();
									} catch (Exception $e) {
										echo "Database error: " . $e->getMessage();
									}
									?>