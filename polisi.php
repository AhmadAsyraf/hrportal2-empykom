<?php
// Start the session
session_start();

// Check if staff_pass_id and staff_name session variables are set
if (isset($_SESSION["staff_pass_id"]) && isset($_SESSION["staff_name"])) {
	// Retrieve staff_pass_id and staff_name from session variables
	$staff_pass_id = $_SESSION["staff_pass_id"];
	$staff_name = $_SESSION["staff_name"];
} else {
	// If session variables are not set, display an error message or redirect the user
	echo "Session variables not set!";
}
?>
<?php include('header.php') ?>
<div class="titlebar-inner pt-120 pb-85">
	<div class="container py-0 px-15">
		<div class="row justify-center -mx-15">
			<div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center py-0 px-15 text-gray-600">
				<h1 class="leading-60 text-title">Policies</h1>
				<p class="leading-28">Our policies serve as a guide for both employees and management, outlining the standards of conduct, procedures, and expectations within our organization.</p>
			</div>
		</div>
	</div>
</div>
</div>
<section class="lqd-section about pt-40 pb-100" id="about">
	<div class="container py-0 px-15">
		<div class="row justify -mx-15">
			<strong class="text-37 tracking-0 leading-30 ">Latest update at policies:</strong>
			<?php include 'view/latest_ann.php' ?>
		</div>

	</div>

</section>


<main class="content bg-top-center bg-cover" id="lqd-site-content" style="background-image: url(./assets/images/demo/modern-agency/bg.jpg);">
	<div id="lqd-contents-wrap">

		<!-- Start Digital Experience -->
		<section class="lqd-section digital-experience py-100">
			
			<div class="container">
			<div style="text-align: center;">
				<a style="color: red; float: right;" href="polisiHR.php"><strong><u>Logout >> </u></strong></a>
			</div>
			<br>

				<hr>
				<div class="row items-center">

					<section class="lqd-section about pt-40 pb-100" id="about">
						<div class="container">
							<div class="row text-center">
								<div class="container">

									<div class="row h-vh-300 items-center sm:h-auto">
										<div class="col col-12 col-md-4 text-start module-first" style="text-align: center;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
											<span>
												<img width="80px" height="80px" src="./assets/images/demo/modern-agency/policies/defini.png">
											</span>
											<br><br>
											<p>Definitions</p><br>
										</div>

										<div class="col col-12 col-md-4 text-start module-first" style="text-align: center;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
											<a href="medical_policy.php" ;>
												<span>
													<img width="80px" height="80px" src="./assets/images/demo/modern-agency/policies/medic.png">
												</span>
												<br><br>
												<p>Medical Benefits</p>
											</a>
											<br>

										</div></a>
										<div class="col col-12 col-md-4 text-start module-first" style="text-align: center;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
											<span>
												<img width="80px" height="80px" src="./assets/images/demo/modern-agency/policies/salaray.png">
											</span>
											<br><br>
											<p>Salary Administration</p><br>

										</div>
										<div class="col col-12 col-md-4 text-start module-first" style="text-align: center;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
											<a href="workinghour_policy.php" ;>
												<span>
													<img width="80px" height="80px" src="./assets/images/demo/modern-agency/policies/work_hour.png">
												</span>
												<br><br>
												<p>Working Hour</p><br>
											</a>
										</div>
										<div class="col col-12 col-md-4 text-start module-first" style="text-align: center;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
											<span>
												<img width="80px" height="80px" src="./assets/images/demo/modern-agency/policies/general_benef.png">
											</span>
											<br><br>
											<p>General Benefits</p><br>

										</div>
										<div class="col col-12 col-md-4 text-start module-first" style="text-align: center;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
											<span>
												<img width="80px" height="80px" src="./assets/images/demo/modern-agency/policies/hr_pln_dev.png">
											</span>
											<br><br>
											<p>HR Planning &amp; Development</p><br>

										</div>
										<div class="col col-12 col-md-4 text-start module-first" style="text-align: center;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
											<span>
												<img width="80px" height="80px" src="./assets/images/demo/modern-agency/policies/plane.png">
											</span>
											<br><br>
											<p>Business And Travel Expenses</p><br>

										</div>
										<div class="col col-12 col-md-4 text-start module-first" style="text-align: center;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
											<span>
												<img width="80px" height="80px" src="./assets/images/demo/modern-agency/policies/staf_career.png">
											</span>
											<br><br>
											<p>Staff Career Planning</p><br>

										</div>
										<div class="col col-12 col-md-4 text-start module-first" style="text-align: center;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
											<span>
												<img width="80px" height="80px" src="./assets/images/demo/modern-agency/policies/industri_rela.png">
											</span>
											<br><br>
											<p>Industrial Relations</p><br>

										</div>
										<div class="col col-12 col-md-4 text-start module-first" style="text-align: center;" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
											<a href="leave_policy.php" ;>
												<span>
													<img width="80px" height="80px" src="./assets/images/demo/modern-agency/policies/leave_adm.png 	">
												</span>
												<br><br>
												<p>Leave Administration</p>
											</a>
										</div>
									</div>
									<div style="text-align: center;">
										<a style="color: red; float: right;" href="polisiHR.php"><strong><u>Logout >> </u></strong></a>
									</div>

								</div>
							</div>
					</section>
					<!-- End Banner -->
				</div>
			</div>
		</section>
		<!-- End Digital Experience -->
	</div>
</main>

<?php include('footer.php') ?>