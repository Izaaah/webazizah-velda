<?php
include 'Koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama_guru = $_POST['nama_guru'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $email = $_POST['email'];
    $nama_kelas = $_POST['nama_kelas'];

    // Query untuk memasukkan data ke dalam tabel tb_guru
    $sql = "INSERT INTO tb_guru (nama_guru, alamat, nomor_hp, email, nama_kelas) VALUES ('$nama_guru', '$alamat', '$nomor_hp', '$email', '$nama_kelas')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
?>
