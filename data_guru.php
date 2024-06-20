<?php
include 'koneksi.php';

// Query untuk mengambil data dari tabel tb_guru
$query = "SELECT * FROM tb_guru";
$result = mysqli_query($conn, $query);

$gurus = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $gurus[] = $row;
    }
}

// Mengirimkan data sebagai JSON
header('Content-Type: application/json');
echo json_encode($gurus);

mysqli_close($conn);
?>
