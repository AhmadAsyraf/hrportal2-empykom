<?php
// Start or resume the session
session_start();

// Your remaining PHP code here...
?>
<?php include ('header.php')?>
			<main class="content bg-top-center bg-cover" id="lqd-site-content" style="background-image: url(./assets/images/demo/modern-agency/bg.jpg);">
				<div id="lqd-contents-wrap"> 
						<!-- Start Banner -->
				    <section class="lqd-section banner" style="margin-bottom: -100px;">
						<div class="ld-particles-container lqd-particles-as-bg lqd-overlay flex">
							<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles": {"number": {"value" : 4} , "color": {"value" : ["#FDA44C", "#604CFD", "#F85976", "#0FBBB4"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 4}} , "interactivity" : [], "retina_detect": true}'></div>
						</div> 
						<div class="container">
							<div class="row h-vh-80 items-center sm:h-auto">
								<div class="w-100percent lg:w-100percent sm:w-full p-20">
									<div class="w-full flex flex-col items-start bg-no-repeat pt-0 px-15 pb-0 module-bg"  style="background-image: url('./assets/images/demo/modern-agency/shape-lines-circle.svg');">
										 
									</div>
								</div>
							 
							</div>
						</div>
					</section>
					<!-- End Banner -->
					
                    <!-- Start Slider -->
                    <section class="lqd-section clients pb-10" style="margin-top: 100px;">
						 
					<?php include 'view/view_contact_pssb.php'; ?>  
                        <br>
						
                    </section>
                    <!-- End Slider --> 
				</div>
			</main>  
<<?php include ('footer.php')?>