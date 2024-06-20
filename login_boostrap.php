<?php
// Debugging: Menampilkan kesalahan
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Request method: " . $_SERVER["REQUEST_METHOD"] . "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Koneksi.php';

    // Debugging: Menampilkan data yang diterima dari form
    echo "Form submitted successfully.<br>";
    echo "username: " . htmlspecialchars($_POST['username']) . "<br>";
    echo "password: " . htmlspecialchars($_POST['password']) . "<br>";

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Escape user inputs for security
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query to check the username and password
    $query = "SELECT * FROM tb_pengguna WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $level = $row['level'];
        switch ($level) {
            case 'admin':
                header("Location: dashboard_admin.html");
                exit();
            case 'santri':
                header("Location: dashboard_santri.html");
                exit();
            case 'guru':
                header("Location: dashboard_guru.html");
                exit();
            default:
                echo "Level tidak valid.";
                exit();
        }
    } else {
        echo "Username atau password salah.";
        exit();
    }
} else {
    echo "Invalid request method.";
}
?>
