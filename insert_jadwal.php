<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Insert Jadwal</title>
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
    <link href="assets/css/main.css" rel="stylesheet" />
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>

  <body class="contact-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
            </li>
              <li><a href="data_siswa.html" class="active">Data Santri</a></li>
            <li><a href="data_guru.html"class="active">Data Guru</a></li>
             <li><a href="insert_kelas.html"class="active">Insert Kelas</a></li>
              <li><a href="insert_mapel.html"class="active">Insert Mapel</a></li>
               <li><a href="insert_jadwal.php"class="active">Insert Jadwal</a></li>
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
      <!-- Page Title -->
      <div class="page-title" data-aos="fade">
        <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>Jadwal</h1>
                <p class="mb-0">
                  Silahkan disesuaikan jadwal yang ingin dimasukkan dengan jadwal yang telah disetujui oleh para astidz-asatidzah
                </p>
              </div>
            </div>
          </div>
        </div>
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="dashboard_admin.html">Home</a></li>
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
              <form action="proses_insert_jadwal.php" method="post">
                <div class="row gy-4">
                  <div class="col-md-6">
                    <select
                      class="form-select"
                      name="nama_kelas"
                      id="nama_kelas"
                      required
                    >
                      <option value="">Pilih Kelas</option>
                      <?php
                    include 'Koneksi.php'; 
                    $query_kelas = "SELECT id_kelas, nama_kelas FROM tb_kelas";
                    $result_kelas = mysqli_query($conn, $query_kelas);
                    while ($row = mysqli_fetch_assoc($result_kelas)) {
                        echo "<option value='" . $row['id_kelas'] . "'>" . $row['nama_kelas'] . "</option>";
                    }
                    ?>
                    </select>
                  </div>
                 <div class="col-md-6">
                    <select
                      class="form-select"
                      name="mata_pelajaran"
                      id="mata_pelajaran"
                      required
                    >
                      <option value="">Mata Pelajaran</option>
                     <?php
                    include 'Koneksi.php'; 
                    $query_kelas = "SELECT id_mapel, nama_mapel FROM tb_mapel";
                    $result_kelas = mysqli_query($conn, $query_kelas);
                    while ($row = mysqli_fetch_assoc($result_kelas)) {
                        echo "<option value='" . $row['id_mapel'] . "'>" . $row['nama_mapel'] . "</option>";
                    }
                    ?>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <select
                      class="form-select"
                      name="nama_pengajar"
                      id="nama_pengajar"
                      required
                    >
                      <option value="">Nama Pengajar</option>
                      <?php
                    include 'Koneksi.php'; 
                    $query_kelas = "SELECT id_guru, nama_guru FROM tb_guru";
                    $result_kelas = mysqli_query($conn, $query_kelas);
                    while ($row = mysqli_fetch_assoc($result_kelas)) {
                        echo "<option value='" . $row['id_guru'] . "'>" . $row['nama_guru'] . "</option>";
                    }
                    ?>
                    </select>
                  </div>
                  <div class="col-md-6">
                    </select>
                  </div>
                  <div class="col-md-12">
                    <select class="form-select" name="Jadwal" required>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jum'at">Jum'at</option>
                      <option value="Sabtu">Sabtu</option>
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
      <!-- /Contact Section -->
    </main>
    <script>
    $(document).ready(function() {
        // Load data kelas
        $.ajax({
            url: 'get_kelas_guru.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                $.each(data, function(key, value) {
                    $('#nama_kelas').append('<option value="' + value.nama_kelas + '">' + value.nama_kelas + '</option>');
                });
            }
        });
         $.ajax({
            url: 'get_mapel.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                $.each(data, function(key, value) {
                    $('#mata_pelajaran').append('<option value="' + value.nama_mapel + '">' + value.nama_mapel + '</option>');
                });
            }
        });

        // Load data nama pengajar
        $.ajax({
            url: 'get_guru.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                $.each(data, function(key, value) {
                    $('#nama_pengajar').append('<option value="' + value.nama_guru + '">' + value.nama_guru + '</option>');
                });
            }
        });
    });
</script>

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
