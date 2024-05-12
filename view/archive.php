<!-- Start Icon Box Text -->
<section class="lqd-section icon-box-text py-40" data-section-luminosity="light" data-custom-animations="true" data-ca-options='{"triggerHandler": "inview", "animationTarget": ".animation-element", "duration": "1000", "delay": "225", "ease": "power4.out", "direction": "forward", "initValues": {"transformOriginX" : 50 , "transformOriginY" : 50 , "transformOriginZ": "0px", "opacity" : 0} , "animations": {"transformOriginX" : 50 , "transformOriginY" : 50 , "transformOriginZ": "0px", "opacity" : 1}}'>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            

            <?php
            // Array of links and corresponding titles
            $links = array(
                 
                "artikel.php" => "Artikel - Sumber Manusia",
                "message_pres.php" => "Message From Mr. President",
                "message_mva.php" => "MVA message",
                "aktiviti.php" => "Aktiviti - Jabatan Sumber Manusia"
            );

            // Loop through the array and generate the HTML for each link
            foreach ($links as $link => $title) {
                ?>
                <div class="col col-12 col-lg-6">
                    <a href="<?php echo $link; ?>">
                        <div class="w-full relative flex flex-col justify-center border-5 border-black-20 pt-65 pb-50 px-55 mb-30 module-icon-box">
                            <div class="iconbox relative flex-col items-start justify-center text-start" data-animate-icon="true" data-plugin-options='{"color" : "rgb(255, 255, 255)"}'>
                                <div class="iconbox-icon-wrap">
                                    <span class="iconbox-icon-container mb-55 text-52 text-black">
                                        <i class="lqd-icn-ess icon-lqd-path"></i>
                                    </span>
                                </div>
                                <div class="contents">
                                    <h3 class="font-semibold uppercase mb-10 text-14 text-black"><?php echo $title; ?></h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>
<!-- End Icon Box Text -->
