<?php
// Menggunakan file Koneksi.php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menerima data dari form
    $nama_guru = $_POST['nama_guru'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $email = $_POST['email'];
    $nama_kelas = $_POST['nama_kelas'];

    // Query untuk menambah data guru
    $sql = "INSERT INTO tb_guru (nama_guru, alamat, nomor_hp, email, nama_kelas) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $nama_guru, $alamat, $nomor_hp, $email, $nama_kelas);

    if ($stmt->execute()) {
        echo "<script>alert('Data guru berhasil ditambahkan'); window.location='data_guru.html';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data guru'); window.location='tambah_baru.php';</script>";
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request method'); window.location='tambah_baru.php';</script>";
}
?>
