
 
<?php include('header.php') ?>
<?php include('../view/admin_nav.php') ?>
<!-- ======= Sidebar ======= -->
<?php include('admin_menu.php') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>HR Policy Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">HR Policy</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Start prosedur list -->
  <section class="section">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> HR Policy Form</h5>
        <form action="../control/p-process-form.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="p_title">Title:</label>
            <input type="text" name="p_title" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="p_description">Description:</label>
            <input type="text" name="p_description" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="title">Category:</label>
            <select name="p_category" class="form-control" required>
              <option value="">Select Position</option>
              <option value="Definition">Definition</option>
              <option value="Medical Benefit">Medical Benefit</option>
              <option value="Salary">Salary</option>
              <option value="Working Hour">Working Hour</option>
              <option value="Industrial Training">Industrial Training</option>
              <option value="HR Planning and Development">HR Planning and Development</option>
              <option value="Leave Administration">Leave Administration</option>
              <option value="Business and Travel">Business and Travel</option>
              <option value="Staff career Planning">Staff career Planning</option>
              <option value="General Benefits">General Benefits</option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="title">Position:</label><br>
            <?php
            // Include your database connection file
            include('dbconn.php');
            // Fetch positions from the database excluding po_id = 1
            $sql = "SELECT po_id, po_title, po_gred FROM position_ WHERE po_id != 1";
            $result = $conn->query($sql);
            // Check if there are any positions in the database
            if ($result->num_rows > 0) {
              // Loop through each row and populate the checkboxes
              while ($row = $result->fetch_assoc()) {
                echo "<div class='form-check'>";
                echo "<input class='form-check-input' type='checkbox' name='po_id[]' value='" . $row['po_id'] . "'>";
                echo "<label class='form-check-label'>" . $row['po_title'] . " - " . $row['po_gred'] . "</label>";
                echo "</div>";
              }
            } else {
              // If no positions found in the database, display a message
              echo "<span class='text-danger'>No positions found</span>";
            }

            // Close the database connection
            $conn->close();
            ?>
          </div><br>
          <h5 class="card-title">Enter Policies :</h5>
          <!-- TinyMCE Editor -->

          <textarea id="basic-conf" class="tinymce-editor" type="text" name="p_polisi" style=" height :auto  ; width: auto;">
            This editor uses the Basic configuration example. 
          </textarea>
          <!-- End TinyMCE Editor --> 
          <br>
          <div class="form-group">
            <label for="p_date"> Date:</label>
            <input type="date" name="p_date" class="form-control" required>
          </div><br>
      </div> 
    </div>
    <!-- Adding some initial editor content 
                <tinymce-editor
                  type="text" name="p_polisi" class="tinymce-editor" required
                  api-key="2ynzjlrw2czkp2h6gijdd6nj3sd84b8na1x8950xks3kjyra"
                  height="500"
                  menubar="' file edit view insert format tools table help'"
                  plugins="'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
    'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
    'table', 'emoticons', 'help'"
                  toolbar="'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                  'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                  'forecolor backcolor emoticons | help' "
                  content_style="'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }"
                  >  
                   &lt;p&gt;Policy!&lt;/p&gt; 
                </tinymce-editor>--> 
    <button type="submit" class="btn btn-primary" onclick="saveData()">Submit</button> <!-- Add onclick event to trigger saveData() before form submission -->
    </form> 
    <script>
      var quill = new Quill('#editor', {
        theme: 'snow' // Specify theme 'snow' for a rich text editor appearance
      });

      // Update the hidden input field with the Quill editor content before form submission
      var form = document.querySelector('form');
      form.onsubmit = function() {
        var quillContent = document.querySelector('.ql-editor').innerHTML;
        document.getElementById('p_polisi').value = quillContent;
      };
    </script> 
    </div>
    </div>
  </section>
  <?php include('../view/list_pol.php') ?>


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>Empicom</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by Siniy
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../admin/assets/vendor/chart.js/chart.umd.js"></script>
<script src="../admin/assets/vendor/echarts/echarts.min.js"></script>
<script src="../admin/assets/vendor/quill/quill.min.js"></script>
<script src="../admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../admin/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../admin/assets/vendor/php-email-form/validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-webcomponent@2/dist/tinymce-webcomponent.min.js"></script>
HTML
copy icon
Copied!
<!-- Include Quill script -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Template Main JS File -->
<script src="../admin/assets/js/main.js"></script>

</body>

</html>