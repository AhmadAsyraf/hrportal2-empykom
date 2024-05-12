<?php
					// Include the database connection file
					include('dbconn.php');


					// Check if the session variable for tracking visits exists
					if (!isset($_SESSION['visit_count'])) {
						// If it doesn't exist, retrieve the visit count from the database
						$sql = "SELECT visit_count FROM page_visits ORDER BY id DESC LIMIT 1";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
							$_SESSION['visit_count'] = $row['visit_count'];
						} else {
							// If no previous visit count is found, initialize it to 1
							$_SESSION['visit_count'] = 1;
						}
					} else {
						// If it exists, increment it by 1
						$_SESSION['visit_count']++;
					}

					// Update the visit count in the database
					$sql = "INSERT INTO page_visits (visit_count) VALUES ({$_SESSION['visit_count']})";
					if ($conn->query($sql) === FALSE) {
						echo "Error updating visit count: " . $conn->error;
					}

					// Display the total number of visits
					echo " <p>" . $_SESSION['visit_count'] .  "<p> ";

					// Close the database connection
					$conn->close();
					?>