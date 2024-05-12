<?php
// Fetch 'ak_title' from the URL query string
$ak_title = $_GET['ak_title'];

// Assuming you have already established a database connection
include('dbconn.php');

// Your SQL query to retrieve 'ak_doc' based on 'ak_title'
$sql_docs = "SELECT ak_doc FROM aktiviti WHERE ak_title = '$ak_title'";
$result_docs = mysqli_query($conn, $sql_docs);

// Check if there are any documents for the current 'ak_title'
if (mysqli_num_rows($result_docs) > 0) {
    // Array to store document names
    $doc_names = array();

    // Loop through each document and store its name
    while ($row_doc = mysqli_fetch_assoc($result_docs)) {
        $doc_names[] = $row_doc['ak_doc'];
    }
} // Add the closing curly brace for the if statement
?>
<?php include('header.php')?>
			
			<main class="content bg-top-center bg-cover" id="lqd-site-content" style="background-image: url(./assets/images/demo/modern-agency/bg.jpg);">
				<div id="lqd-contents-wrap">

				<section class="lqd-section digital-experience py-100">
						<div class="container">
							<div class="row items-center">
							<div class="w-full flex flex-col items-start lg:text-center lg:items-center" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
										 
										<div class="ld-fancy-heading relative">
											<h2 class="mb-0/75em ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover" data-inview="true" data-transition-delay="true" data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}' style="margin-top: 50px;">
												 
												<mark class="lqd-highlight">
													<span class="lqd-highlight-txt"><h3><?php echo $ak_title; ?></h3> <!-- Display ak_title --></span>
													<span class="lqd-highlight-inner"></span>
												</mark>
											</h2>
										</div>
										<section class="lqd-section services-accordion pt-65 pb-35" id="services" data-section-luminosity="light">
						<div class="container">
							<div class="row"> 
	   							   <!-- Start Services Accordion -->
                                      <section class="lqd-section services-accordion pt-65 pb-35" id="services" data-section-luminosity="light">
                                        <div class="container">
                                            <div class="container">
                                                <!-- Display images associated with the 'ak_title' -->
                                                <?php foreach ($doc_names as $doc_name) : ?>
                                                    <img src="uploads/<?php echo $doc_name; ?>" alt="Image" style="width: 300px; height: 300px;">
                                                <?php endforeach; ?>
                                            </div> 
											 
                                        </div>
                                    </section>
                                    <!-- End Services Accordion -->

							</div>
						</div>
					</section>
				
									</div> 
							</div>	<div style="display: flex; justify-content: flex-end;">
								<a href="aktiviti.php" class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
									<span class="btn-txt" data-text="Back" data-transition-delay="true" data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}' data-split-text="true" data-split-options='{"type":  "chars, words"}'>Back</span>
									<span class="btn-icon">
										<i class="lqd-icn-ess icon-md-arrow-forward"></i>
									</span>
									<span class="btn-icon mr-10">
										<i class="lqd-icn-ess icon-md-arrow-forward"></i>
									</span>
								</a>
							</div>
						</div>
					</section>
			 

                   

				</div>
			</main>
          <?php include('footer.php')?>