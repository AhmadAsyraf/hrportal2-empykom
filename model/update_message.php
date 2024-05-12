<?php include('header.php') ?>
<?php include('../view/admin_nav.php') ?>

<!-- ======= Sidebar ======= -->
<?php include('admin_menu.php') ?>
<!-- End Sidebar-->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Create Message content</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Message</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <!-- Start Disiplin list -->
  <section class="section">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Message Form</h5>
        <form action="../control/m-process-form.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="title">Volume:</label>
            <input type="text" name="ms_vol" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="ms_title" class="form-control" required>
          </div><br>
          <div class="form-group">
            <label for="image">Upload File:</label>
            <input type="file" name="ms_doc" class="form-control-file" accept="image/*">
          </div><br>
          <div class="form-group">
            <label for="title">Category:</label>
            <select name="ms_category" class="form-control" required>
              <option value="">Select Category</option>
              <option value="Message from Mr Masaki Ogita">Message from Mr Masaki Ogita</option>
              <option value="Message from Mr Takahashi">Message from Mr Takahashi</option>
              <option value="MVA Message">MVA Message</option>
            </select>
          </div><br>
          <div class="form-group">
            <label for="publish_date">date:</label>
            <input type="date" name="ms_date" class="form-control" required><br>
          </div> 
          <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
      </div>
    </div>
  </section> 
  <!-- Start Calendar list -->

  <?php include('../view/disp_message.php') ?>

</main><!-- End #main -->
<!-- ======= Footer ======= -->
<?php include('admin_footer.php') ?>