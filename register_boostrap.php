<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $level = $conn->real_escape_string($_POST['level']);

    $sql = "INSERT INTO tb_pengguna (username, password, level) VALUES ('$username', '$password', '$level')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to register.html after successful insertion
        header("Location: register.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
