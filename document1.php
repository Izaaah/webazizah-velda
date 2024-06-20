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

    <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Jun 06 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body class="contact-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">TPQ Nurul Huda</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
            </li>
           <li><a href="Pendaftaran.html" class="active">Pendaftaran</a></li>
            <li><a href="jadwal.php"class="active">Jadwal Mapel</a></li>
             <li><a href="dashboard_santri.html"class="active">Kembali</a></li>
           
            
              ></a>
              <ul>
                  </a>
                  <ul></ul>
                </li>
              </ul>
</li>
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
                <h1>Document</h1>
                <p class="mb-0">
                Silahkan memasukkan file KK berupa pdf dengan size maximal 2 mb.
                </p>
              </div>
            </div>
          </div>
        </div>
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Contact</li>
            </ol>
          </div>
        </nav>
      </div>
      <section id="contact" class="contact section">
        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        </div>
         <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-8">
                        <form action="document.php" method="post" enctype="multipart/form-data">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file" class="custom-file-input-label">Choose File</label>
                                        <input type="file" id="file" name="file_upload" class="custom-file-input" accept=".pdf" required>
                                    </div> 
                                </div>
                                <input type="hidden" name="id_pendaftaran" value="<?php echo isset($_GET['id_pendaftaran']) ? $_GET['id_pendaftaran'] : ''; ?>">
                                <div class="col-md-12">
                                    <input type="submit" value="Submit" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<style>
  .custom-file-input {
    color: transparent;
    cursor: pointer;
  }

  /* Style for the button */
  .custom-file-input-label {
    background-color: #28a745; /* Green background */
    color: #fff; /* White text */
    padding: 10px 20px; /* Padding */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer;
    transition: background-color 0.3s; /* Smooth transition */
  }

  /* Change background color on hover */
  .custom-file-input-label:hover {
    background-color: #218838; /* Darker green */
  }

  /* Style for the file name display */
  .file-name {
    margin-top: 10px;
    font-size: 14px;
    color: #333; /* Text color */
  }
</style>

    <footer id="footer" class="footer position-relative">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
                       <div class="footer-contact pt-3">
              <p class="mt-3">
               
              </p>
             
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
        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p>
          © <span>Copyright</span>
        <div class="credits">
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
