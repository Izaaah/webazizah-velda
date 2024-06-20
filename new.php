<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pendaftaran Santri Baru TPQ Nurul Huda</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
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
  </head>
  <body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <h1 class="sitename">Nurul Huda</h1>
        <nav id="navmenu" class="navmenu">
          <ul></ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>
    <main class="main">
      <section id="hero" class="hero section">
        <img src="assets/img/TPQ1.jpeg" alt="" data-aos="fade-in" />
        <div class="container">
          <h2 data-aos="fade-up" data-aos-delay="100">
            TPQ Nurul Huda,<br />Dinoyo, Malang
          </h2>
          <p data-aos="fade-up" data-aos-delay="200">
            Selamat Datang di Pendaftaran Santri TPQ Nurul Huda
          </p>
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <form action="register_boostrap.php" method="post">
                <div class="row gy-4">
                  <div class="col-md-12">
                    <input
                      type="text"
                      name="username"
                      class="form-control"
                      placeholder="Username"
                      required
                    />
                  </div>
                  <div class="col-md-12">
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      placeholder="Password"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <select class="form-select" name="level" id="level" required>
                      <option value="santri">Santri</option>
                      <option value="admin">Admin</option>
                      <option value="guru">Guru</option>
                    </select>
                  </div>

                  <!-- Fields for santri -->
                  <div id="santri-fields" style="display: none;">
                    <div class="col-md-12">
                      <input
                        type="text"
                        name="nama_siswa"
                        class="form-control"
                        placeholder="Nama Siswa"
                      />
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        name="tempat_lahir"
                        class="form-control"
                        placeholder="Tempat Lahir"
                      />
                    </div>
                    <div class="col-md-12">
                      <input
                        type="date"
                        name="tanggal_lahir"
                        class="form-control"
                        placeholder="Tanggal Lahir"
                      />
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        name="jenis_kelamin"
                        class="form-control"
                        placeholder="Jenis Kelamin"
                      />
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        name="nama_ortu"
                        class="form-control"
                        placeholder="Nama Orang Tua"
                      />
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        name="no_hp"
                        class="form-control"
                        placeholder="Nomor HP"
                      />
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        name="nama_kelas"
                        class="form-control"
                        placeholder="Nama Kelas"
                      />
                    </div>
                  </div>

                  <div class="col-md-12">
                    <input
                      type="submit"
                      class="btn btn-success"
                      value="Register"
                    />
                    <a href="login.html" class="btn btn-success"
                      >Sudah Punya akun</a
                    >
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <a
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
    >
      <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Show/hide santri fields based on level -->
    <script>
      document.getElementById('level').addEventListener('change', function() {
        var santriFields = document.getElementById('santri-fields');
        if (this.value === 'santri') {
          santriFields.style.display = 'block';
        } else {
          santriFields.style.display = 'none';
        }
      });
    </script>
  </body>
</html>
