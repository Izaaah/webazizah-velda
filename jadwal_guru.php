<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kelas</title>
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
<body>
    
    <div class="container mt-5">
        <h1>Jadwal Kelas</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kelas</th>
                    <th>Mata Pelajaran</th>
                    <th>Nama Pengajar</th>
                    <th>Hari</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include file koneksi ke database
                include 'Koneksi.php';

                // Query untuk mengambil data dari tabel tb_jadwal
                $query = "SELECT 
                            tb_jadwal.jadwal, 
                            tb_kelas.nama_kelas, 
                            tb_mapel.nama_mapel, 
                            tb_guru.nama_guru 
                          FROM 
                            tb_jadwal 
                          INNER JOIN tb_kelas ON tb_jadwal.id_kelas = tb_kelas.id_kelas 
                          INNER JOIN tb_mapel ON tb_jadwal.id_mapel = tb_mapel.id_mapel 
                          INNER JOIN tb_guru ON tb_jadwal.id_guru = tb_guru.id_guru";
                $result = mysqli_query($conn, $query);

                // Check if there are any records
                if (mysqli_num_rows($result) > 0) {
                    // Loop through the records and display them
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['nama_kelas'] . "</td>";
                        echo "<td>" . $row['nama_mapel'] . "</td>";
                        echo "<td>" . $row['nama_guru'] . "</td>";
                        echo "<td>" . $row['jadwal'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
                

                // Close the database connection
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
         <form action="form_data_guru.php" method="get">
          <input type="submit" value="Kembali" class="btn btn-success" />
    </div>

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
