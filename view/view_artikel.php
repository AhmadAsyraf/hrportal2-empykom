<?php
							// Include database connection
							include('dbconn.php');

							// Query to fetch data from the 'artikel' table in descending order by publish date
                            $sql = "SELECT * FROM artikel ORDER BY ar_date DESC";

							$result = $conn->query($sql);

							if ($result) {
								if ($result->num_rows > 0) {
									// Output data of each row
									while ($row = $result->fetch_assoc()) {
							?>
										<div class="col col-12 col-lg-4">
											<a href="uploads/<?php echo htmlspecialchars($row['ar_doc']); ?>" target="_blank" class="text-decoration-none">
												<div class="w-full relative flex flex-col justify-center border-1 border-black-20 pt-65 pb-50 px-55 mb-30 module-icon-box">
													<div class="iconbox relative flex-col items-start justify-center text-start" data-animate-icon="true" data-plugin-options='{"color" : "rgb(255, 255, 255)"}'>
														<div class="iconbox-icon-wrap">
															<span class="iconbox-icon-container mb-55 text-52 text-black">
																<i class="lqd-icn-ess icon-lqd-path"></i>
															</span>
														</div>
														<div class="contents">
															<h3 class="font-semibold uppercase mb-10 text-14 text-black"><?php echo htmlspecialchars($row['ar_title']); ?></h3>
															<p>
																<span class="text-16 leading-20 text-black-400">Publish Date: <?php echo htmlspecialchars($row['ar_date']); ?></span>
															</p>
															<!-- You can add more elements here if needed -->
														</div>
													</div>
												</div>
											</a>
										</div>
							<?php
									}
								} else {
									echo "0 results";
								}
							} else {
								echo "Error: " . $conn->error;
							}

							$conn->close();
							?>