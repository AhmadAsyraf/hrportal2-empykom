<?php include ('header.php')?>
		<main class="content bg-top-center bg-cover" id="lqd-site-content" style="background-image: url(./assets/images/demo/modern-agency/bg.jpg);">
			<div id="lqd-contents-wrap"> 
				<!-- Start Digital Experience -->
				<section class="lqd-section digital-experience py-100">
					<div class="container">
						<div class="row items-center">
							<div class="w-full flex flex-col items-start lg:text-center lg:items-center" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
								<div class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100 animation-element"> 
								</div>
								<div class="ld-fancy-heading relative">
									<h2 class="mb-0/75em ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
										<span ></span>
										<mark class="lqd-highlight">
											<span class="lqd-highlight-txt">Disciplinary Procedure Page</span>
											<span class="lqd-highlight-inner"></span>
										</mark>
									</h2>
								</div>
								<div class="ld-fancy-heading relative">
									<p class="text-20 leading-1/5em mb-2/5em ld-fh-element relative"> We are committed to fostering a positive and productive work environment where all employees feel respected, valued, and supported. Our disciplinary procedures are designed to provide a fair and transparent framework for addressing instances of misconduct or behavior that are inconsistent with our company's standards and values.</p>
  								</div>  
							</div>
							<div class="row">
									<?php include 'view/procedure_d.php'; ?> 
								</div>
						</div><br><br><br><br>
						<div style="display: flex; justify-content: flex-start;">
								<a href="discipline.php" class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
									<span class="btn-txt" data-text="Back to Discipline" data-transition-delay="true" data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}' data-split-text="true" data-split-options='{"type":  "chars, words"}'>Back to Discipline</span>
									<span class="btn-icon">
										<i class="lqd-icn-ess icon-md-arrow-backward"></i>
									</span>
									<span class="btn-icon mr-10">
										<i class="lqd-icn-ess icon-md-arrow-backward"></i>
									</span>
								</a>
							</div>
						</div>
				</section>
				<!-- End Digital Experience --> 
			</div>
		</main>  
		<?php include ('footer.php')?>