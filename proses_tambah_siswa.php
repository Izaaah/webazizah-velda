<?php
// Menggunakan file koneksi.php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menerima data dari form
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nama_ortu = $_POST['nama_ortu'];
    $no_hp = $_POST['no_hp'];
    $nama_kelas = $_POST['nama_kelas'];

    // Query untuk menambahkan data siswa ke dalam database
    $sql = "INSERT INTO tb_siswa (nama, tempat_lahir, tanggal_lahir, jenis_kelamin, nama_ortu, no_hp, nama_kelas) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssss', $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $nama_ortu, $no_hp, $nama_kelas);

    if ($stmt->execute()) {
        echo "<script>alert('Data siswa berhasil ditambahkan'); window.location='data_siswa.html';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data siswa'); window.location='tambah_baru.php';</script>";
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request method'); window.location='tambah_baru.php';</script>";
}
?>
