<?php
include 'Koneksi.php'; 

if (isset($_GET['id_siswa'])) {
    $id_siswa = $_GET['id_siswa'];
} else {
    die("ID Siswa tidak ditemukan.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ttl_pendaftaran = $_POST['ttl_pendaftaran'];
    $status = $_POST['status'];
    
    // Escape the input values to prevent SQL injection
    $id_siswa = mysqli_real_escape_string($conn, $id_siswa);
    $ttl_pendaftaran = mysqli_real_escape_string($conn, $ttl_pendaftaran);
    $status = mysqli_real_escape_string($conn, $status);
    
    $query_pendaftaran = "INSERT INTO tb_pendaftaran (id_siswa, ttl_pendaftaran, status) 
                          VALUES ('$id_siswa', '$ttl_pendaftaran', '$status')";                     
    if (mysqli_query($conn, $query_pendaftaran)) {
        $id_pendaftaran = mysqli_insert_id($conn);
        header("Location: document1.php?id_pendaftaran=$id_pendaftaran");
        exit();
    } else {
        echo "<p>Error: " . $query_pendaftaran . "<br>" . mysqli_error($conn) . "</p>";
    }
}
?>
