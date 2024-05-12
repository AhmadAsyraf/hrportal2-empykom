<?php include('header.php') ?>
<?php include('../view/admin_nav.php') ?>

<!-- ======= Sidebar ======= -->
<?php include('admin_menu.php') ?>
<!-- End Sidebar-->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Job Vacancy Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Job Vacancy Form</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <!-- Start prosedur list -->
  <section class="section">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Job Vacancy Form</h5>
        <form action="../control/jk-process-form.php" method="post" enctype="multipart/form-data"> 
          <div class="form-group">
            <label for="title">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" required>
          </div><br> 
          <div class="form-group">
            <label for="jk_title">Title:</label>
            <input type="text" name="jk_title" class="form-control" required>
          </div><br> 
          <div class="form-group">
            <label for="jk_shop">Jawatan:</label>
            <input type="text" name="jk_shop" class="form-control" required>
          </div><br> 
          <div class="form-group">
            <label for="jk_category">Category:</label>
            <select name="jk_category" class="form-control" required>
              <option value="">Select Category</option>
              <option value="Eksekutif">Eksekutif</option>
              <option value="Bukan Eksekutif">Bukan Eksekutif</option>
            </select>
          </div><br> 
          <div class="form-group">
            <label for="jk_kekosongan">Kekosongan:</label>
            <input type="text" name="jk_kekosongan" class="form-control" required>
          </div><br>

          <tinymce-editor type="text" name="p_polisi" class="form-control" required api-key="2ynzjlrw2czkp2h6gijdd6nj3sd84b8na1x8950xks3kjyra" height="500" menubar="' file edit view insert format tools table help'" plugins="'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                  'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
                  'table', 'emoticons', 'help'" toolbar="'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                  'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                  'forecolor backcolor emoticons | help' " content_style="'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }">
            <!-- Adding some initial editor content -->
            &lt;p&gt;Policy!&lt;/p&gt;

          </tinymce-editor>

          <div class="form-group">
            <label for="jk_due_date">Due Date:</label>
            <input type="date" name="jk_due_date" class="form-control" required>
          </div><br> 
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
            document.getElementById('jk_kelayakkan').value = quillContent;
          };
        </script> 
      </div>
    </div>
  </section>

  <!-- End list -->
  <?php include('../view/disp_job_vacancy.php') ?>


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include('admin_footer.php') ?>