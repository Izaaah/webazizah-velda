<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Ubah Data Siswa</h2>
        <form action="proses_ubah_siswa.php" method="post">
            <?php
            // Menggunakan file koneksi.php
            require 'koneksi.php';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id_siswa'])) {
                // Menerima id_siswa dari form
                $idSiswa = $_POST['id_siswa'];

                // Query untuk mendapatkan data siswa berdasarkan id_siswa yang dipilih
                $sql = "SELECT * FROM tb_siswa WHERE id_siswa = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('i', $idSiswa);
                $stmt->execute();
                $result = $stmt->get_result();

                // Memeriksa apakah ada hasil dari query
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    ?>
                    <div class="form-group">
                        <label for="nama">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-laki" <?php echo ($row['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                            <option value="Perempuan" <?php echo ($row['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_ortu">Nama Orang Tua/Wali</label>
                        <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" value="<?php echo $row['nama_ortu']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $row['no_hp']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_kelas">Kelas</label>
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?php echo $row['nama_kelas']; ?>" required>
                    </div>
                    <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa']; ?>">
                    <?php
                } else {
                    echo '<div class="alert alert-danger" role="alert">Tidak ada data siswa yang dipilih untuk diubah.</div>';
                }

                // Menutup statement dan koneksi
                $stmt->close();
                $conn->close();
            } else {
                echo '<div class="alert alert-danger" role="alert">Tidak ada siswa yang dipilih untuk diubah.</div>';
            }
            ?>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="data_siswa.html" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
