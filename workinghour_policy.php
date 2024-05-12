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
<main class="content bg-top-center bg-cover" id="lqd-site-content" style="background-image: url(./assets/images/demo/modern-agency/bg.jpg);">
			<div id="lqd-contents-wrap">
        	<!-- Start Banner -->
				<section class="lqd-section banner">
					<div class="ld-particles-container lqd-particles-as-bg lqd-overlay flex">
						<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles": {"number": {"value" : 4} , "color": {"value" : ["#FDA44C", "#604CFD", "#F85976", "#0FBBB4"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 4}} , "interactivity" : [], "retina_detect": true}'></div>
					</div><br><br><br><br><br> 
					<div class="container">
					<h3>Working Hour Policies : </h3><br> <br> 
						<div class="row h-vh-300 items-center sm:h-auto"> 
						<?php include 'view/wh_policies.php'; ?>  
						<div style="display: flex; justify-content: flex-start;">
								<a href="polisi.php" class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
									<span class="btn-txt" data-text="Back to Policies" data-transition-delay="true" data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}' data-split-text="true" data-split-options='{"type":  "chars, words"}'>Back to Policies</span>
									<span class="btn-icon">
										<i class="lqd-icn-ess icon-md-arrow-backward"></i>
									</span>
									<span class="btn-icon mr-10">
										<i class="lqd-icn-ess icon-md-arrow-backward"></i>
									</span>
								</a>
							</div>
					</div>
			</div>
			</section>
			<!-- End Banner -->

	</div>
	</main>
<?php include('footer.php') ?>