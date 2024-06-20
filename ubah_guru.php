<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Guru</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Ubah Data Guru</h2>
        <form action="proses_ubah_guru.php" method="post">
            <?php
            // Menggunakan file koneksi.php
            require 'koneksi.php';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id_guru'])) {
                // Menerima id_guru dari form
                $idGuru = $_POST['id_guru'];

                // Query untuk mendapatkan data guru berdasarkan id_guru yang dipilih
                $sql = "SELECT * FROM tb_guru WHERE id_guru = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('i', $idGuru);
                $stmt->execute();
                $result = $stmt->get_result();

                // Memeriksa apakah ada hasil dari query
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    ?>
                    <div class="form-group">
                        <label for="nama_guru">Nama Guru</label>
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $row['nama_guru']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="<?php echo $row['nomor_hp']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_kelas">Kelas Yang Diampu</label>
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?php echo $row['nama_kelas']; ?>" required>
                    </div>
                    <input type="hidden" name="id_guru" value="<?php echo $row['id_guru']; ?>">
                    <?php
                } else {
                    echo "Tidak ada data guru yang dipilih untuk diubah.";
                }

                // Menutup statement dan koneksi
                $stmt->close();
                $conn->close();
            } else {
                echo "Tidak ada guru yang dipilih untuk diubah.";
            }
            ?>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="data_guru.html" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
