<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact - Mentor Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
  </head>

  <body class="contact-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <h1 class="sitename">Pendaftaran Santri Baru</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="#"
                >
                <i class="bi bi-chevron-down toggle-dropdown"></i
              ></a>
             <li><a href="Pendaftaran.html" class="active">Pendaftaran</a></li>
            <li><a href="jadwal.php"class="active">Jadwal Mapel</a></li>
             <li><a href="dashboard_santri.html"class="active">Kembali</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>

    <main class="main">
      <!-- Page Title -->
      <div class="page-title" data-aos="fade">
        <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>TPQ Nurul Huda Dinoyo</h1>
                <p class="mb-0">
                  TPQ Nurul Huda merupakan TPQ yang terletak di daerah dinoyo,Malang. TPQ ini didirikan tahun 1980. 
                </p>
              </div>
            </div>
          </div>
        </div>
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
            </ol>
          </div>
        </nav>
      </div>
     <section id="contact" class="contact section">
        <div class="container">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-8">
              <form action="next.php?id_siswa=<?php echo $_GET['id_siswa']; ?>" method="post">
                <div class="row gy-4">
                  <div class="col-md-12">
                    <input type="date" class="form-control" name="ttl_pendaftaran" placeholder="Tanggal Lahir" required />
                  </div>
                  <div class="col-md-12">
                    <select class="form-select" name="status" required>
                      <option value="">Pilih Status</option>
                      <option value="mendaftar">Mendaftar</option>
                      <option value="daftar ulang">Daftar Ulang</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <input type="submit" value="Submit" class="btn btn-success">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
                        </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="row">
       </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-center">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
      <!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer position-relative">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            </a>
            <div class="footer-contact pt-3">
            </div>
            <div class="social-links d-flex mt-4">
            </div>
          </div>
          <div class="col-lg-2 col-md-3 footer-links">
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
          </div>

          <div class="col-lg-4 col-md-12 footer-newsletter">
              </div>
              <div class="error-message"></div>
              <div class="sent-message">
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <div class="credits">
            <p>TPQ Nurul Huda Dinoyo</p>
        </div>
      </div>
    </footer>
    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>
    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
