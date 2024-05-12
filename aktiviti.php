<?php
// Start or resume the session
session_start();

// Your remaining PHP code here...
?>
<?php include('header.php')?>

			<main class="content bg-top-center bg-cover" id="lqd-site-content" style="background-image: url(./assets/images/demo/modern-agency/bg.jpg);">
				<div id="lqd-contents-wrap">
                <section class="lqd-section banner">
					<div class="ld-particles-container lqd-particles-as-bg lqd-overlay flex">
						<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles": {"number": {"value" : 4} , "color": {"value" : ["#FDA44C", "#604CFD", "#F85976", "#0FBBB4"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 4}} , "interactivity" : [], "retina_detect": true}'></div>
					</div><br><br>
					<div class="container">
						<div class="row h-vh-auto items-center sm:h-auto">
							<div class="w-50percent lg:w-70percent sm:w-full p-0">
								<div class="w-full flex flex-col items-start bg-no-repeat pt-10 px-15 pb-50 module-bg" style="background-image: url('./assets/images/demo/modern-agency/shape-lines-circle.svg');">
									<div class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}' style="margin-top: 80px;">
										<h6 class="ld-fh-element relative lqd-split-lines lowercase m-0 py-10 px-20" data-split-text="true" data-split-options='{"type":"lines"}'> Human Resource Portal</h6>
									</div>
									<div class="ld-fancy-heading relative" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "duration" : 1800, "startDelay" : 250, "delay" : 180, "ease": "power4.out", "initValues": {"y": "30px", "z": "-130px", "rotationX" : -75, "opacity" : 0} , "animations": {"y": "0px", "z": "0px", "rotationX" : 0, "opacity" : 1}}'>
										<h1 class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left lqd-split-lines -tracking-1" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}' data-split-text="true" data-split-options='{"type": "lines"}'>
											<span></span>
											<mark class="lqd-highlight">
												<span class="lqd-highlight-txt">Activiti Pages</span>
												<span class="lqd-highlight-inner"></span>
											</mark>
										</h1>
									</div>
									<div class="w-full">
										<div class="ld-fancy-heading relative mask-text module-text" data-custom-animations="true" data-ca-options='{"animationTarget": ".lqd-split-lines .lqd-lines .split-inner", "duration" : 1800, "startDelay" : 850, "delay" : 180, "ease": "power4.out", "initValues": {"y": "65px"} , "animations": {"y": "0px"}}'>
											<p class="ld-fh-element mb-0/5em inline-block relative text-20 leading-1/5em lqd-split-lines" data-split-text="true" data-split-options='{"type": "lines"}'> Welcome to the "Activity Page" of our HR portal, where we capture and store all the memorable moments, events, and activities from our company's life at Perodua. This section serves as a visual diary of our collective experiences,  achievements, and vibrant culture that define us as a team.</p>
										</div>
									</div>
									<div class="spacer w-full">
										<div class="w-full h-10"></div>
									</div>
									<div class="pt-35 flex items-center" data-custom-animations="true" data-ca-options='{"animationTarget": ".banner .module-btn", "duration" : 1800, "startDelay" : 1200, "delay" : 180, "ease": "power4.out", "initValues": {"z": "-70px", "rotationX" : -90, "opacity" : 0} , "animations": {"z": "0px", "rotationX" : 0, "opacity" : 1}}'>
										<div class="w-full flex items-center module-btn sm:flex-wrap">

											<div class="ld-fancy-heading relative">
												<p class="text-14 m-0 p-0 ld-fh-element relative">

												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="w-30percent p-0 sm:w-full">

							</div>

						</div>
					</div>
				</section>
				<!-- End Banner -->

					<!-- Start Blog -->
					<section class="lqd-section blog py-20">
						<div class="container"><hr style="color: rgba(o, o, o, 0.1);">
							<div class="row">
								<div class="col col-12">
									<div class="row -mx-15">
									<?php include ('view/aktiviti.php')?>
                                    </div>
                                </div>
                            </div>
							<div style="display: flex; justify-content: flex-end;">
								<a href="polisi.php" class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
									<span class="btn-txt" data-text="<< Back" data-transition-delay="true" data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}' data-split-text="true" data-split-options='{"type":  "chars, words"}'><< Back </span>
									<span class="btn-icon">
										<i class="lqd-icn-ess icon-md-arrow-backward"></i>
									</span>
									<span class="btn-icon mr-10">
										<i class="lqd-icn-ess icon-md-arrow-backward"></i>
									</span>
								</a>
							</div>
                        </section>
						
                        <!-- End Blog -->

				</div>
			</main>
			<?php include('footer.php')?>