<?php include('header.php')?>
<?php include('../view/admin_nav.php') ?>
 <!-- ======= Sidebar ======= -->
 <?php include('admin_menu.php')?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Create Internal Position Content</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Internal Position</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <!-- Start Disiplin list -->
    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Internal Position Form</h5>
          <form action="../control/jd-process-form.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" required>
          </div><br>
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" name="jd_title" class="form-control" required>
            </div><br>
            <div class="form-group">
              <label for="image">Upload File:</label>
              <input type="file" name="jd_doc" class="form-control-file" accept="file/*">
            </div><br>
            <div class="form-group">
              <label for="publish_date">Year :</label>
              <input type="text" name="jd_year" class="form-control" required><br>
            </div>
            <div class="form-group">
              <label for="publish_date">Date:</label>
              <input type="date" name="jd_date" class="form-control" required><br>
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
          </form> 
        </div>
      </div>
    </section> 
    <!-- Start Calendar list -->

    <?php include('../view/disp_in_pos.php')?> 
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->



   <!-- ======= Footer ======= -->
   <?php include('admin_footer.php')?>