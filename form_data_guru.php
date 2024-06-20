<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact - Mentor Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
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
    <link href="assets/css/main.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body class="contact-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <h1 class="sitename">Mentor</h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
            </li>
             <li><a href="form_data_guru.php" class="active">Form Data Guru</a></li>
            <li><a href="jadwal_guru.php"class="active">Jadwal Mapel </a></li>
             <li><a href="data_siswa_guru.html"class="active">Data Siswa</a></li>
             <li><a href="dashboard_admin.html"class="active">Kembali</a></li>
             <li><a href="login.html"class="active">Logout</a></li>             
              ></a>
              <ul>
                  </a>
                  <ul></ul>
                </li>
              </ul>
            </li>
            <li><a href="contact.html" class="active">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>
    <main class="main">
      <div class="page-title" data-aos="fade">
        <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>Data Pengajar</h1>
                <p class="mb-0">
                  Data pengajar diperlukan untuk emis TPQ. Silahkan mengisi sesuai dengan data yang ada.
                  Data bapak ibu pengajar akan kami simpan dan rahasiakan. Trimakasih 
                </p>
              </div>
            </div>
          </div>
        </div>
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="dashboard_guru.html">Home</a></li>
              <li class="current">Contact</li>
            </ol>
          </div>
        </nav>
    </div>
         <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-8">
              <form action="data_guruu.php" method="post">
                <div class="row gy-4">
                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="nama_guru"
                      placeholder="Nama Pengajar"
                      required
                    />
                  </div>
                    <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="alamat"
                      placeholder="Alamat"
                      required
                    />
                  </div>
                   <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="nomor_hp"
                      placeholder="Nomor HP"
                      required
                    />
                  </div>
                     <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="email"
                      placeholder="Email"
                      required />
                  </div>
                   <div class="col-md-12">
                    <select class="form-select" name="id_kelas" id="id_kelas" required>
                    <option value="">Pilih Kelas</option>
                    <?php
                    include 'koneksi.php'; 
                    $query_kelas = "SELECT id_kelas, nama_kelas FROM tb_kelas";
                    $result_kelas = mysqli_query($conn, $query_kelas);
                    while ($row = mysqli_fetch_assoc($result_kelas)) {
                        echo "<option value='" . $row['id_kelas'] . "'>" . $row['nama_kelas'] . "</option>";
                    }
                    ?>
                </select>
                  </div>
                  <div class="col-md-12">
                    <input
                      type="submit"
                      value="Submit"
                      class="btn btn-success"
                    />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    
    </main>
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
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>
    <div id="preloader"></div>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const selectKelas = document.querySelector('select[name="kelas_yang_diampu"]');
    
        fetch('get_data_guru.php')
          .then(response => response.json())
          .then(data => {
            data.forEach(kelas => {
              const option = document.createElement('option');
              option.value = kelas.id;
              option.textContent = kelas.nama;
              selectKelas.appendChild(option);
            });
          })
          .catch(error => console.error('Error fetching data:', error));
      });
    </script>
  </body>
</html>
