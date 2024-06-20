<?php
include 'Koneksi.php';

// Periksa apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_guru'])) {
  // Hapus data guru dari database berdasarkan id_guru yang dikirimkan
  $id_guru_to_delete = $_POST['id_guru'];
  $sql = "DELETE FROM tb_guru WHERE id_guru IN (" . implode(',', $id_guru_to_delete) . ")";

  if ($conn->query($sql) === TRUE) {
    // Jika penghapusan berhasil, kembali ke halaman website
    header("Location: data_guru.html");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Tutup koneksi (opsional, karena skrip akan segera selesai di sini)
$conn->close();
?>
