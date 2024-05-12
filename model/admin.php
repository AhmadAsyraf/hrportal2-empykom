 
<?php include('header.php') ?>
<?php include('admin_menu.php') ?>
<?php include('../view/admin_nav.php') ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>

  </div><!-- End Page Title -->

  <!-- Left side columns -->
  <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <!-- Activity Card -->
          <div class="col-xxl-4 col-md-6">
            <a href="update_aktiviti.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-award"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Activity</h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Activity Card -->

          <!-- Announcement Card -->
          <div class="col-xxl-4 col-md-6">
            <a href="update_announcement.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(236, 251, 238, 0.7);">
                      <i class="bi bi-mailbox" style="color: green;"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Announcement</h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Announcement Card -->

          <!-- Article Card -->
          <div class="col-xxl-4 col-md-6">
            <a href="update_artikel.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(	244,	67,	54, 0.1);">
                      <i class="bi bi-journal-bookmark" style="color: Red;"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Article</Article>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Article Card -->

           <!-- Bank Card -->
          <div class="col-xxl-4 col-md-6">
            <a href="update_bank.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(68,	68,	68, 0.4);">
                      <i class="bi bi-journal-bookmark" style="color: black;"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Bank Forms</Article>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Bank Card -->

            <!-- Banner Card -->
            <div class="col-xxl-4 col-md-6">
            <a href="update_slider.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(	217,	210,	233, 0.7);">
                      <i class="bi bi-tv" style="color: purple;"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Banner</Article>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Banner Card -->

            <!-- Rules Card -->
            <div class="col-xxl-4 col-md-6">
            <a href="update_brules.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(111,	126,	255, 0.1);">
                    <i class="bi bi-layout-text-sidebar-reverse" style="color: rgb(41,	134,	204);"></i> 
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Basic Rules</Article>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Rules Card -->

            <!-- Bulletin Card -->
            <div class="col-xxl-4 col-md-6">
            <a href="update_brules.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(181,	0,	157, 0.1);">
                    <i class="bi bi-card-list" style="color: rgb(181,	0,	157);"></i> 
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Bulletin IR</Article>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Bulletin Card -->

           <!-- Contact Card -->
           <div class="col-xxl-4 col-md-6">
            <a href="update_contact_us.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(216,	203,	182, 0.7);">
                    <i class="bi bi-telephone-outbound" style="color: rgb(116,	71,	0);"></i> 
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Contact Us</Article>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Contact Card -->

             <!-- Discipline Card -->
             <div class="col-xxl-4 col-md-6">
            <a href="update_disiplin.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(255,	235,	175, 0.2);">
                    <i class="bi bi-journal-text" style="color: rgb(	241,	194,	50);"></i> 
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Discipline</Article>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Discipline Card -->

             <!-- Discipline Card -->
             <div class="col-xxl-4 col-md-6">
            <a href="update_pro_induksi.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(252,	193,	137, 0.2);">
                    <i class="bi bi-person" style="color: rgb(240,	120,	7);"></i> 
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Employment</Article>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Discipline Card -->

             <!-- Discipline Card -->
             <div class="col-xxl-4 col-md-6">
            <a href="update_pro_induksi.php" style="text-decoration: none;">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(187,	243,	211, 0.2);">
                    <i class="bi bi-clipboard-check" style="color: rgb(0,	234,	103);"></i> 
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 0.9rem;">Forms</Article>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- End Discipline Card -->

        <!-- Discipline Card -->
        <div class="col-xxl-4 col-md-6">
                  <a href="update_pro_induksi.php" style="text-decoration: none;">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(40,	0,	194, 0.1);">
                          <i class="bi bi-building" style="color: rgb(40,	0,	194);"></i> 
                          </div>
                          <div class="ps-3">
                            <h6 style="font-size: 0.9rem;">Internal Position</Article>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Discipline Card -->

                     <!-- Discipline Card -->
        <div class="col-xxl-4 col-md-6">
                  <a href=" update_jawatan_kosong.php" style="text-decoration: none;">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(255,	0,	233, 0.1);">
                          <i class="bi bi-megaphone" style="color: rgb(255,	0,	233);"></i> 
                          </div>
                          <div class="ps-3">
                            <h6 style="font-size: 0.9rem;">Job vacancy</Article>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Discipline Card -->

                     <!-- Discipline Card -->
        <div class="col-xxl-4 col-md-6">
                  <a href="update_perjanjian_bersama.php" style="text-decoration: none;">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(32,	152,	154, 0.1);">
                          <i class="bi bi-file-zip" style="color: rgb(32	152	154);"></i> 
                          </div>
                          <div class="ps-3">
                            <h6 style="font-size: 0.9rem;">Joint Agreement</Article>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Discipline Card -->

                     <!-- Discipline Card -->
                     <div class="col-xxl-4 col-md-6">
                  <a href="update_message.php" style="text-decoration: none;">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(184,	146,	85, 0.2);">
                          <i class="bi bi-clipboard-check" style="color: rgb(184	146	85);"></i> 
                          </div>
                          <div class="ps-3">
                            <h6 style="font-size: 0.9rem;">Message</Article>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Discipline Card -->

                     <!-- Discipline Card -->
                     <div class="col-xxl-4 col-md-6">
                  <a href="update_orga.php" style="text-decoration: none;">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(204,	0,	0, 0.1);">
                          <i class="bi bi-diagram-3" style="color: rgb(204,	0,	0);"></i> 
                          </div>
                          <div class="ps-3">
                            <h6 style="font-size: 0.9rem;">Organization Chart</Article>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Discipline Card -->

                      <!-- Discipline Card -->
                      <div class="col-xxl-4 col-md-6">
                  <a href="update_pdpa.php" style="text-decoration: none;">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(	91,	91,	91, 0.1);">
                          <i class="bi bi-hdd" style="color: rgb(	91,	91,	91, 0.8);"></i> 
                          </div>
                          <div class="ps-3">
                            <h6 style="font-size: 0.9rem;">PDPA</Article>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Discipline Card -->

                      <!-- Discipline Card -->
                      <div class="col-xxl-4 col-md-6">
                  <a href="update_polisiHR.php" style="text-decoration: none;">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(	114,  	6,	216, 0.1);">
                          <i class="bi bi-hdd" style="color: rgb(	114,	6,	216, 0.6);"></i> 
                          </div>
                          <div class="ps-3">
                            <h6 style="font-size: 0.9rem;">Policies</Article>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Discipline Card -->

                
                      <!-- Discipline Card -->
                      <div class="col-xxl-4 col-md-6">
                  <a href="update_prosedur.php" style="text-decoration: none;">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(	244,	131,	15, 0.1);">
                          <i class="bi bi-hdd" style="color: rgb(	244,	131,	15, 1);"></i> 
                          </div>
                          <div class="ps-3">
                            <h6 style="font-size: 0.9rem;">Procedure</Article>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Discipline Card -->

                           <!-- Discipline Card -->
                           <div class="col-xxl-4 col-md-6">
                  <a href="update_user.php" style="text-decoration: none;">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;"><span></span></h5>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgba(	119,	174,	27, 0.1);">
                          <i class="bi bi-hdd" style="color: rgb(119	,	174,	27, 1);"></i> 
                          </div>
                          <div class="ps-3">
                            <h6 style="font-size: 0.9rem;">Register</Article>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Discipline Card -->




        </div>
      </div>
    </div>
  </section>
   
</main><!-- End #main -->
<?php include('admin_footer.php') ?>