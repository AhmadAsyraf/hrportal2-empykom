<?php include('header.php') ?>
<br> <br>
<!-- Start How It Work -->
<section id="borang" class="lqd-section how-it-work py-90" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":".animation-element","duration":"1800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":35,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}' data-section-luminosity="light">
    <div class="container">
        <div class="row justify-between">
            <div class="col col-12 col-md-6 col-lg-9 animation-element">
                <h2 class="ld-fh-element mb-0/5em">Procedures</h2>
            </div>
            <div class="col col-12 animation-element">
                <div class="w-full relative flex flex-col flex-grow-1 pt-40 pb-10 mb-15 border-bottom border-black">
                    <div class="container-fluid">
                        <div class="row items-center">
                            <div class="col-2 animation-element">
                                <div class="w-50percent relative flex border-top border-black-50"></div>
                            </div>
                            <div class="col-8 animation-element">
                                <h6 class="ld-fh-element mb-0/5em text-12 uppercase tracking-0/01em font-normal text-black"> The Procedures</h6>
                            </div>
                        </div>

                        <section class="lqd-section services pt-65 pb-50" data-section-luminosity="light">
                            <div class="container">

                                <div class="items-center">
                                  <!-- Procedure Search Bar -->
                               <!-- Procedure Search Bar -->
                                <div class="procedure-search-bar">
                                    <form id="procedure-search-form" class="procedure-search-form d-flex align-items-center" style="width: 150px;">
                                        <input id="procedure-search-input" type="text" name="query" placeholder="Search Procedures" title="Enter search keyword">
                                        <button type="submit" title="Search">Go</button>
                                    </form>
                                </div><!-- End Procedure Search Bar-->


                                <!-- JavaScript for Procedure Search Functionality -->
                                <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var procedureSearchForm = document.getElementById('procedure-search-form');
                                    var procedureSearchInput = document.getElementById('procedure-search-input');

                                    procedureSearchForm.addEventListener('submit', function(event) {
                                        event.preventDefault(); // Prevent form submission
                                        
                                        var query = procedureSearchInput.value.trim(); // Get the search query
                                        
                                        // Send AJAX request to server-side script
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', 'procedure_search.php'); // New PHP script for procedure search
                                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                        xhr.onload = function() {
                                            if (xhr.status === 200) {
                                                // Update the section with the search results
                                                document.getElementById('procedure-search-results').innerHTML = xhr.responseText;
                                            } else {
                                                console.error('Request failed. Status:', xhr.status);
                                            }
                                        };
                                        xhr.send('query=' + encodeURIComponent(query));
                                    });
                                });
                                </script>
                                <!-- Search Results Container -->
                                <div id="procedure-search-results"></div>

                                    <div class="flex flex-col pr-30 pl-5percent module-col-19">
                                        <div class="accordion accordion-lg accordion-title-underlined  accordion-wrap mb-2em link-black">
                                           
                                            <?php include('view/procedures.php') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Services -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>