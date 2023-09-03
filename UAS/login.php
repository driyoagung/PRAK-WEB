<?php
// Koneksi ke database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'uas';
$conn = new mysqli('localhost', 'root', '', 'uas');
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}

// Ambil data dari form login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari user berdasarkan username dan password
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo 'Login berhasil!';
    } else {
        echo 'Login gagal. Periksa kembali username dan password Anda.';
    }
}
$conn->close();
?>
