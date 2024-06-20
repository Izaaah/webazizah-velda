<?php
// Menggunakan file koneksi.php
require 'Koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menerima data dari form
    $id_guru = $_POST['id_guru'];
    $nama_guru = $_POST['nama_guru'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $email = $_POST['email'];
    $nama_kelas = $_POST['nama_kelas'];

    // Query untuk memperbarui data guru
    $sql = "UPDATE tb_guru SET nama_guru = ?, alamat = ?, nomor_hp = ?, email = ?, nama_kelas = ? WHERE id_guru = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssi', $nama_guru, $alamat, $nomor_hp, $email, $kelas_yang_diampu, $id_guru);

    if ($stmt->execute()) {
        echo "<script>alert('Data guru berhasil diubah'); window.location='data_guru.html';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data guru'); window.location='ubah_guru.php';</script>";
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request method'); window.location='ubah_guru.php';</script>";
}
?>
