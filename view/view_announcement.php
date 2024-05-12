<section id="blog" class="lqd-section blog" data-section-luminosity="light">

								<div class="container">
									<div class="row">
									 
										 
										<div class="col col-lg-12" style="margin: left 16px;"></div>
										<div class="container">
											<div class="row">
												<li class="ld-fh-element py-1 px-15 mb-1/25em bg-red-500 rounded-100 text-5 uppercase font-semibold tracking-0/1em text-white">
													<h4>Pekeliling</h4>
												</li>
												<div class="container">
													<div class="col-md-12">
														<table class="table" style="border: 0px solid #808080;">
															<thead>
																<tr>
																	<th style="padding-left: 10px;">No.</th>
																	<th style="text-align:center;">Title</th>
																	<th>Description</th>
																	<th>Date</th>
																</tr>
															</thead>
															<tbody>
																<?php
																// Include your database connection file
																include('dbconn.php');

																// Fetch latest items where cal_category is "Pekeliling" from the schedule_list table
																$sql = "SELECT * FROM schedule_list WHERE cal_category = 'Pekeliling' ORDER BY start_datetime ";
																$result = $conn->query($sql);
																$i = 1;

																if ($result->num_rows > 0) {
																	// Output data of each row
																	while ($row = $result->fetch_assoc()) {
																		echo '<tr>';
																		echo '<td style="text-align:center; padding-left: 10px;">' . $i . '</td>';
																		echo '<td><a href="#" style="color: red;" onclick="window.open(\'uploads/' . $row["cal_doc"] . '\', \'_blank\')">' . $row["title"] . '</a></td>';
																		echo '<td>' . $row["description"] . '</td>';
																		echo '<td>' . date('d/m/Y', strtotime($row["start_datetime"])) . '</td>';
																		echo '</tr>';
																		$i++;
																	}
																} else {
																	echo '<tr><td colspan="4">No items found</td></tr>';
																}

																// Close database connection
																$conn->close();
																?>
															</tbody>

														</table>
													</div>
												</div>
											</div><br>
										</div>
										<div class="container">
											<div class="container"> 
												<div class="row">
													<li class="ld-fh-element py-1 px-15 mb-1/25em bg-red-500 rounded-100 text-5 uppercase font-semibold tracking-0/1em text-white">
														<h5>Memo</h5>
													</li>
													<div class="col-md-12">
														<table class="table" style="border: 0px solid #808080;">
															<thead style="text-align:center; ">
																<tr>
																	<th style="padding-left: 10px;">No.</th>
																	<th>Title</th>
																	<th>Description</th>
																	<th>Date</th>
																</tr>
															</thead>
															<tbody>
																<?php
																// Include your database connection file
																include('dbconn.php');

																// Fetch latest items where cal_category is "Pekeliling" from the schedule_list table
																$sql = "SELECT * FROM schedule_list WHERE cal_category = 'Memo' ORDER BY start_datetime ";
																$result = $conn->query($sql);
																$i = 1;

																if ($result->num_rows > 0) {
																	// Output data of each row
																	while ($row = $result->fetch_assoc()) {
																		echo '<tr>';
																		echo '<td style="text-align:center; padding-left: 10px;">' . $i . '</td>';
																		echo '<td><a href="#" style="color: red;" onclick="window.open(\'uploads/' . $row["cal_doc"] . '\', \'_blank\')">' . $row["title"] . '</a></td>';
																		echo '<td>' . $row["description"] . '</td>';
																		echo '<td>' . date('d/m/Y', strtotime($row["start_datetime"])) . '</td>';
																		echo '</tr>';
																		$i++;
																	}
																} else {
																	echo '<tr><td colspan="4">No items found</td></tr>';
																}

																// Close database connection
																$conn->close();
																?>
															</tbody>

														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section