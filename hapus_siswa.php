<?php
// Menggunakan file koneksi.php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id_siswa'])) {
    // Menerima array id_siswa dari form
    $idSiswaArray = $_POST['id_siswa'];

    // Memulai transaksi
    $conn->begin_transaction();

    try {
        // Hapus dokumen terkait terlebih dahulu
        $sql_document = "DELETE FROM tb_document WHERE id_pendaftaran IN (SELECT id_pendaftaran FROM tb_pendaftaran WHERE id_siswa IN (".implode(',', array_fill(0, count($idSiswaArray), '?'))."))";
        $stmt_document = $conn->prepare($sql_document);
        $stmt_document->bind_param(str_repeat('i', count($idSiswaArray)), ...$idSiswaArray);
        $stmt_document->execute();

        // Hapus pendaftaran siswa
        $sql_pendaftaran = "DELETE FROM tb_pendaftaran WHERE id_siswa IN (".implode(',', array_fill(0, count($idSiswaArray), '?')).")";
        $stmt_pendaftaran = $conn->prepare($sql_pendaftaran);
        $stmt_pendaftaran->bind_param(str_repeat('i', count($idSiswaArray)), ...$idSiswaArray);
        $stmt_pendaftaran->execute();

        // Kemudian hapus siswa
        $sql_siswa = "DELETE FROM tb_siswa WHERE id_siswa IN (".implode(',', array_fill(0, count($idSiswaArray), '?')).")";
        $stmt_siswa = $conn->prepare($sql_siswa);
        $stmt_siswa->bind_param(str_repeat('i', count($idSiswaArray)), ...$idSiswaArray);
        $stmt_siswa->execute();

        // Commit transaksi jika berhasil
        $conn->commit();

        echo "Data siswa berhasil dihapus.";

        // Mengarahkan kembali ke data_siswa.html setelah penghapusan berhasil
        header("Location: data_siswa.html");
        exit();
    } catch (Exception $e) {
        // Rollback transaksi jika terjadi kesalahan
        $conn->rollback();
        echo "Terjadi kesalahan saat menghapus data: " . $e->getMessage();
    }

    // Menutup statement
    $stmt_document->close();
    $stmt_pendaftaran->close();
    $stmt_siswa->close();
} else {
    echo "Tidak ada siswa yang dipilih untuk dihapus.";
}

// Menutup koneksi
$conn->close();
?>
