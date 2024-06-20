<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_guru = $_POST['nama_guru'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $email = $_POST['email'];
    $id_kelas = $_POST['id_kelas'];

    // Mendapatkan nama_kelas berdasarkan id_kelas
    $query_kelas = "SELECT nama_kelas FROM tb_kelas WHERE id_kelas = '$id_kelas'";
    $result_kelas = mysqli_query($conn, $query_kelas);
    if ($result_kelas && mysqli_num_rows($result_kelas) > 0) {
        $row = mysqli_fetch_assoc($result_kelas);
        $nama_kelas = $row['nama_kelas'];

        // Insert data ke tabel tb_guru
        $query_insert = "INSERT INTO tb_guru (nama_guru, alamat, nomor_hp, email, nama_kelas, id_kelas) VALUES ('$nama_guru', '$alamat', '$nomor_hp', '$email', '$nama_kelas', '$id_kelas')";

        if (mysqli_query($conn, $query_insert)) {
            // Data berhasil disimpan, redirect ke form_data_guru.php
            header("Location: form_data_guru.php");
            exit();
        } else {
            echo "<p>Error: " . $query_insert . "<br>" . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<p>Error: ID Kelas tidak valid.</p>";
    }

    mysqli_close($conn);
}
?>
