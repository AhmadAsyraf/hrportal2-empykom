<?php
										// Assuming you have already established a database connection and retrieved the titles from your database
										include('dbconn.php'); 
										// Your SQL query to retrieve distinct 'ak_title' values sorted by 'ak_year'
										$sql_titles = "SELECT DISTINCT ak_title, ak_year FROM aktiviti ORDER BY ak_year DESC"; 
										$result_titles = mysqli_query($conn, $sql_titles); 
										// Check if there are any titles
										if (mysqli_num_rows($result_titles) > 0) {
											// Loop through each 'ak_title'
											while ($row_title = mysqli_fetch_assoc($result_titles)) {
												// Fetch the 'ak_title' and 'ak_year'
												$ak_title = $row_title['ak_title'];
												$ak_year = $row_title['ak_year']; 
												// Output the container for the 'ak_title' and 'ak_year' with onclick event to open popup
										?>
												<div class="col col-12 col-lg-6"> <br><br>
													<a href="popup.php?ak_title=<?php echo urlencode($ak_title); ?>" style="color: black;">
														<div class="w-full relative flex flex-col justify-center border-5 border-black-20 pt-65 pb-50 px-55 mb- 10 module-icon-box">
															<div class="iconbox relative flex-col items-start justify-center text-start" data-animate-icon="true" data-plugin-options='{"color" : "rgb(255, 255, 255)"}'>
																<div class="contents">
																	<h3 class="font-semibold uppercase mb-10 text-30 text-black"><?php echo $ak_title; ?>&nbsp;<?php echo $ak_year; ?></h3>
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