<!-- Start How It Work -->
<section id="pp" class="lqd-section how-it-work py-90" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".animation-element","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}' data-section-luminosity="light">
	<div class="container">
		<div class="container">
			<h1 class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-lines -tracking-1" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}' data-split-text="true" data-split-options='{"type": "lines"}'>
				<span>Human Resource - </span>
				<mark class="lqd-highlight">
					<span class="lqd-highlight-txt">PSSB </span>
					<span class="lqd-highlight-inner"></span>
				</mark>
			</h1>
		</div>

		<div class="col col-12 animation-element">
			<div class="w-full relative flex flex-col flex-grow-1 pt-0 pb-5 mb-15 border-bottom border-black">
				<div class="container-fluid">
					<hr>

					<?php
					// Include your database connection file
					include('./dbconn.php');

					// Fetch events data from the database where cu_category is equal to "PSSB"
					$sql = "SELECT cu_sect, cu_name, cu_position, cu_ext, cu_dept, cu_category FROM contact_us WHERE cu_category = 'PSSB'";
					$result = $conn->query($sql);

					// Store the fetched data in an array
					$events = array();
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							$events[] = $row;
						}
					}

					// Close the database connection
					$conn->close();
					?>

					<?php
					// Group events by department
					$events_by_department = array();
					foreach ($events as $event) {
						$department = $event['cu_dept'];
						$events_by_department[$department][] = $event;
					}
					?>

					<?php foreach ($events_by_department as $department => $events) : ?>
						<br><br><br>
						<li class="ld-fh-element py-1 px-15 mb-1/25em bg-red-500 rounded-100 text-5 uppercase font-semibold tracking-0/1em text-white">
							<br><br>
							<h4><u><?php echo $department; ?></u><br> </h4>
						</li>
						<table border="0">
							<thead>
								<tr>
									<th style=" padding-left: 10px;">Section</th>
									<th>Name</th>
									<th>Position</th>
									<th>Extension</th>
								</tr>
							</thead>
							<br>
							<tbody>
								<?php foreach ($events as $event) : ?>
									<tr>
										<td style=" padding-left: 10px;"><?php echo $event['cu_sect']; ?></td>
										<td><?php echo $event['cu_name']; ?></td>
										<td><?php echo $event['cu_position']; ?></td>
										<td style="text-align:center;"><?php echo $event['cu_ext']; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table><br>
					<?php endforeach; ?>


					<br>
					<div style="display: flex; justify-content: flex-start;">
						<a href="contact.php" class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
							<span class="btn-txt" data-text="Back to Contatc" data-transition-delay="true" data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}' data-split-text="true" data-split-options='{"type":  "chars, words"}'>Back to Contact</span>
							<span class="btn-icon">
								<i class="lqd-icn-ess icon-md-arrow-backward"></i>
							</span>
							<span class="btn-icon mr-10">
								<i class="lqd-icn-ess icon-md-arrow-backward"></i>
							</span>
						</a>
					</div>

					<!-- End Services -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End How It Work -->