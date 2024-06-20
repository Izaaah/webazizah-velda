<?php
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nama_ortu = $_POST['nama_ortu'];
    $no_hp = $_POST['no_hp'];
    $nama_kelas = $_POST['nama_kelas'];

    // Menyimpan data siswa ke tabel tb_siswa
    $query_siswa = "INSERT INTO tb_siswa (nama, tempat_lahir, tanggal_lahir, jenis_kelamin, nama_ortu, no_hp, nama_kelas) 
                    VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$nama_ortu', '$no_hp', '$nama_kelas')";
    if (mysqli_query($conn, $query_siswa)) {
        // Mendapatkan ID siswa yang baru saja diinsert
        $last_id = mysqli_insert_id($conn);
        echo "Last ID: " . $last_id; // Pesan debugging
        header("Location: next1.php?id_siswa=$last_id");
        exit();
    } else {
        echo "<p>Error: " . $query_siswa . "<br>" . mysqli_error($conn) . "</p>";
    }
}
?>
