<?php
// Include file koneksi ke database
include 'Koneksi.php';

// Ambil data dari form
$nama_kelas = $_POST['nama_kelas'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$nama_pengajar = $_POST['nama_pengajar'];
$jadwal_hari = $_POST['Jadwal'];

// Query untuk menyimpan data ke dalam tabel tb_jadwal
$query_insert = "INSERT INTO tb_jadwal (id_kelas, id_mapel, id_guru, jadwal) 
                VALUES (?, ?, ?, ?)";
                
// Persiapkan statement
$stmt = $conn->prepare($query_insert);
$stmt->bind_param("iiis", $nama_kelas, $mata_pelajaran, $nama_pengajar, $jadwal_hari);

// Eksekusi statement
if ($stmt->execute()) {
    // Redirect ke halaman sukses jika penyimpanan berhasil
    header("Location: insert_jadwal.php?status=success");
    exit;
} else {
    // Redirect ke halaman error jika penyimpanan gagal
    header("Location: insert_jadwal.php?status=error");
    exit;
}

// Tutup statement dan koneksi
$stmt->close();
$conn->close();
?>
