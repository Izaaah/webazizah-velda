<?php
include 'Koneksi.php';
$query = "SELECT * FROM tb_siswa";
$result = mysqli_query($conn, $query);

$siswa_data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $siswa_data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($siswa_data);
?>
