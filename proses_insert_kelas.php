<?php
// Include file koneksi
require_once "Koneksi.php";

// Collect form data
$nama_kelas = $_POST['nama_kelas'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$nama_pengajar = $_POST['nama_pengajar'];
$jadwal = $_POST['Jadwal'];

// Insert into tb_jadwal
$sql_insert = "INSERT INTO tb_jadwal (id_kelas, id_mapel, id_guru, jadwal)
               VALUES ('$nama_kelas', '$mata_pelajaran', '$nama_pengajar', '$jadwal')";

if (mysqli_query($conn, $sql_insert)) {
    echo "Data jadwal berhasil disimpan.";
} else {
    echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
