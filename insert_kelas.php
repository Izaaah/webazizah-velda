<?php
require 'Koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menerima data dari form
    $nama_kelas = $_POST['nama_kelas'];

    // Query untuk menambah data kelas
    $sql = "INSERT INTO tb_kelas (nama_kelas) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $nama_kelas);

    if ($stmt->execute()) {
        echo "<script>alert('Data kelas berhasil ditambahkan'); window.location='insert_kelas.html';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data kelas'); window.location='insert_kelas.html';</script>";
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request method'); window.location='insert_kelas.html';</script>";
}
?>
