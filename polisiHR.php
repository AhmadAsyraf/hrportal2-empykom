<?php
// Start or resume the session
session_start();

// Your remaining PHP code here...
?>
<?php include ('header.php')?> 
			<main class="content bg-top-center bg-cover" id="lqd-site-content" style="background-image: url(./assets/images/demo/modern-agency/bg.jpg);">
				<div id="lqd-contents-wrap"> 
				    <!-- Start Banner Image  
					<section class="lqd-section banner-image z-1" id="banner">
						<div class="flex relative">
							<div class="module-img absolute ltr-right-0 -top-40 w-710">
								<div class="lqd-imggrp-single block relative">
									<div class="container">
										<figure class="w-full relative"><br><br><br>
											<img width="2036" height="2018" src="./assets/images/demo/modern-agency/logo/lg-wht-bg.png" alt="banner image">
										</figure>
									</div>
								</div>
							</div>
							 
						</div>
					</section>
				 End Banner Image --> 
				 	<!-- Start Banner -->
					<section class="lqd-section banner">
						<div class="ld-particles-container lqd-particles-as-bg lqd-overlay flex">
							<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles": {"number": {"value" : 4} , "color": {"value" : ["#FDA44C", "#604CFD", "#F85976", "#0FBBB4"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 4}} , "interactivity" : [], "retina_detect": true}'></div>
						</div><br><br>
						<div class="container">
							<div class="row h-vh-100 items-center sm:h-auto">
								<div class="w-50percent lg:w-70percent sm:w-full p-0">
									<div class="w-full flex flex-col items-start bg-no-repeat pt-10 px-15 pb-50 module-bg"  style="background-image: url('./assets/images/demo/modern-agency/shape-lines-circle.svg');">
										<div class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
										 </div>
										<div class="ld-fancy-heading relative" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "duration" : 1800, "startDelay" : 250, "delay" : 180, "ease": "power4.out", "initValues": {"y": "30px", "z": "-130px", "rotationX" : -75, "opacity" : 0} , "animations": {"y": "0px", "z": "0px", "rotationX" : 0, "opacity" : 1}}'>
											<h1 class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-lines -tracking-1" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}' data-split-text="true" data-split-options='{"type": "lines"}'>
												<span>HR Portal </span>
												<mark class="lqd-highlight">
													<span class="lqd-highlight-txt">-  Policies  </span>
													<span class="lqd-highlight-inner"></span> 
												</mark>  
											</h1>
												<!-- Start About -->
												<?php include 'control/loginform.php'; ?>  
										</div>
									  </div>
								</div>
								 
							</div>
						</div>
					</section>
					<!-- End Banner --> 
				</div>
			</main>
<?php include ('footer.php')?>