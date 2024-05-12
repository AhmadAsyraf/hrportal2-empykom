<?php include('header.php') ?>
<?php include('../view/admin_nav.php') ?>
  <!-- ======= Sidebar ======= -->
  <?php include('admin_menu.php') ?>

  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Create Forms</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- Start prosedur list -->
    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"> Forms</h5>
          <form action="../control/bb-process-form.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Admin ID:</label>
            <input type="text" name="staff_id" class="form-control" required>
          </div><br>
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" name="bb_title" class="form-control" required>
            </div><br>
            <div class="form-group">
              <label for="title">Category:</label>
              <select name="bb_category" class="form-control" required>
                <option value="">Select Category</option>
                <option value="1. Faedah & Pampasan">Faedah & Pampasan</option>
                <option value="2. PCDC">PCDC</option>
                <option value="3. Staff Computer Tablete Purchase and Loan Scheme">Staff Computer Tablete Purchase and Loan Scheme</option>
                <option value="4. penjawatan">Penjawatan</option>
                <option value="5. Sistem">Sistem</option>
                <option value="6. Disiplin">Disiplin</option>
                <option value="7. Lain - lain">Lain - lain</option>
              </select>
            </div><br>
            <div class="form-group">
              <label for="publish_date">Date Publish:</label>
              <input type="date" name="bb_date" class="form-control" required><br>
            </div>
            <div class="form-group">
              <label for="image">Upload File:</label>
              <input type="file" name="bb_doc" class="form-control-file" accept="image/*">
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form> 
        </div>
      </div>
    </section> 
    <!-- End list -->

    <?php include('../view/disp_form.php') ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('admin_footer.php') ?>