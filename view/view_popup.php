<?php
// Include your database connection file
include('dbconn.php');

// Query to fetch data from the aktiviti table
$sql = "SELECT ak_doc FROM aktiviti";
$result = $conn->query($sql);

// Initialize an array to store document names
$doc_names = array();

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Add each document name to the array
        $doc_names[] = $row["ak_doc"];
    }
} else {
    echo "0 results"; // Output if no results found
}
// Close database connection
$conn->close();
?>

<section class="lqd-section services-accordion pt-65 pb-35" id="services" data-section-luminosity="light">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-6 text-start module-first" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"h6, h2, p,.lqd-counter, figure","duration":"1800","startDelay":"800","delay":"180","ease":"power4.out","direction":"forward","initValues":{"y":60,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":0},"animations":{"y":0,"transformOriginX":50,"transformOriginY":50,"transformOriginZ":"0px","opacity":1}}'>
            </div>
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
<!-- End Services Accordion -->
