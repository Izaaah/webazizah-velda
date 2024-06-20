<?php
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan ID pendaftaran dari POST data
    if (isset($_POST['id_pendaftaran'])) {
        $id_pendaftaran = $_POST['id_pendaftaran'];
    } else {
        die("ID Pendaftaran tidak ditemukan.");
    }

    // Proses upload file
    if (isset($_FILES['file_upload']) && $_FILES['file_upload']['error'] == UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['file_upload']['tmp_name'];
        $file_name = $_FILES['file_upload']['name'];
        $file_size = $_FILES['file_upload']['size'];
        $file_type = $_FILES['file_upload']['type'];
        $max_size = 2 * 1024 * 1024; // 2 MB

        // Validasi ukuran file
        if ($file_size > $max_size) {
            die("Ukuran file terlalu besar. Maksimum 2 MB.");
        }

        // Validasi tipe file
        $allowed_types = array('application/pdf');
        if (!in_array($file_type, $allowed_types)) {
            die("Tipe file tidak valid. Hanya file PDF yang diperbolehkan.");
        }

        // Menentukan lokasi penyimpanan file
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $file_path = $upload_dir . basename($file_name);

        // Memindahkan file yang diupload ke direktori yang diinginkan
        if (move_uploaded_file($file_tmp, $file_path)) {
            $tgl_upload = date('Y-m-d');
            // Menyimpan informasi file ke tabel tb_document
            $query_document = "INSERT INTO tb_document (id_pendaftaran, nama_file, tipe_file, ukuran_file, tgl_upload) VALUES ('$id_pendaftaran', '$file_name', '$file_type', '$file_size', '$tgl_upload')";
            if (mysqli_query($conn, $query_document)) {
                echo "<p>File berhasil diunggah dan informasi disimpan.</p>";
                // Redirect back to document1.php after successful upload
                echo "<script>window.location.href = 'document1.php';</script>";
            } else {
                echo "<p>Error: " . $query_document . "<br>" . mysqli_error($conn) . "</p>";
            }
        } else {
            echo "<p>Gagal mengunggah file.</p>";
        }
    } else {
        echo "<p>File tidak valid atau tidak ada file yang diunggah.</p>";
    }
}
?>
