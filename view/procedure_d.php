<?php
										// Assuming you have a database connection established (using secure approach)
										include('dbconn.php');

										try {
											// Your SQL query to retrieve data with filtering
											$sql = "SELECT * FROM disiplin WHERE d_category='Prosedur Disiplin' ORDER BY d_id ASC";

											$stmt = $conn->prepare($sql);
											$stmt->execute();

											$results = $stmt->get_result(); // Fetch results as object
											$results = $results->fetch_all(MYSQLI_ASSOC);

											if ($results) {
												$count = 1;
												foreach ($results as $row) {
													$an_title = $row['d_title']; // Assuming 'an_title' is the title column name
													$an_image = $row['d_doc']; // Assuming 'an_image' is the image column name (optional)
													$output = '<div class="col col-12 col-xl-3 col-lg-4 offset-xl-1"<a href="#" style="color: red;" onclick="window.open(\'uploads/' . $row["d_doc"] . '\', \'_blank\')">';
													$output .= '  <div class="flex flex-col module-box-1 animation-element">';
													$output .= '    <div class="ld-fancy-heading relative ld-fh-outline">';
													// Use the new design for numbering
													$output .= '      <h6 class="ld-fh-element m-0 absolute text-190 leading-1em font-bold absolute text-gray-100 -rotate-90 md:rotate-0"><span class="ld-fh-txt-outline">0' . $count . '</span>0' . $count . '</h6>';
													$output .= '    </div>';
													$output .= '    <div class="ld-fancy-heading relative">';
													$output .= '      <h3 class="ld-fh-element mb-0/85em">' . $an_title . '</h3>'; // Use retrieved title
													$output .= '    </div>';
													$output .= ' </a> </div>';
													$output .= '</div>';
													echo $output;
													$count++;
												}
											} else {
												echo '<p>No results found for "Kod Perlakuan".</p>';
											}
										} catch (Exception $e) {
											echo "Database error: " . $e->getMessage();
										}
										?>