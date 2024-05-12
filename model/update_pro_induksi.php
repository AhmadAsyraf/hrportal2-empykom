
<?php include('header.php') ?>

<body>

  <?php include('../view/admin_nav.php') ?>
  <!-- ======= Sidebar ======= -->
  <?php include('admin_menu.php') ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Employment Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Employment </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <!-- Start prosedur list -->
    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Employment Form</h5>
          <form action="../control/pi-process-form.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="title">Admin ID:</label>
              <input type="text" name="staff_id" class="form-control" required>
            </div><br>
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" name="pi_title" class="form-control" required>
            </div><br>
            <div class="form-group">
              <label for="title">Category:</label>
              <select name="pi_category" class="form-control" required>
                <option value="">Select Category</option>
                <option value="Program Eksekutif">Program Eksekutif</option>
                <option value="Program Bukan Eksekutif">Program Bukan Eksekutif</option>
                <option value="Program Operator Pengeluaran">Program Operator Pengeluaran</option>
                <option value="Latihan Industri">Latihan Industri</option>
                <option value="Kekosongan Jawatan">Kekosongan Jawatan</option>
                <option value="Pengambilan Pekerja">Pengambilan Pekerja</option>
                <option value="Pengesahan Jawatan">Pengesahan Jawatan</option>
              </select>
            </div><br>
            <div class="form-group">
              <label for="image">Upload File:</label>
              <input type="file" name="pi_doc" class="form-control-file" accept="image/*">
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form> 
        </div>
      </div>
    </section> 
    <!-- End list -->
    <?php include('../view/disp_employ.php') ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- ======= Footer ======= -->
  <?php include('admin_footer.php') ?>