<?php
// Menggunakan file koneksi.php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id_siswa'])) {
    $idSiswa = $_POST['id_siswa'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nama_ortu = $_POST['nama_ortu'];
    $no_hp = $_POST['no_hp'];
    $nama_kelas = $_POST['nama_kelas'];

    // Query untuk mengupdate data siswa
    $sql = "UPDATE tb_siswa SET nama = ?, tempat_lahir = ?, tanggal_lahir = ?, jenis_kelamin = ?, nama_ortu = ?, no_hp = ?, nama_kelas = ? WHERE id_siswa = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssi', $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $nama_ortu, $no_hp, $nama_kelas, $idSiswa);

    if ($stmt->execute()) {
        echo "Data siswa berhasil diubah.";
    } else {
        echo "Terjadi kesalahan saat mengubah data: " . $stmt->error;
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();

    // Redirect kembali ke data_siswa.html
    header("Location: data_siswa.html");
    exit();
} else {
    echo "Tidak ada data siswa yang dipilih untuk diubah.";
}
?>
