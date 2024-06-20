<?php
include 'Koneksi.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data kelas
$sql = "SELECT id_kelas, nama_kelas FROM tb_kelas";
$result = $conn->query($sql);

$kelas = array();
if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        $kelas[] = $row;
    }
} else {
    echo json_encode([]);
    $conn->close();
    exit;
}

$conn->close();

// Mengembalikan data dalam format JSON
header('Content-Type: application/json');
echo json_encode($kelas);
?>

