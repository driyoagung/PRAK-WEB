<?php
// Koneksi ke database (sama dengan langkah 2)
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'uas';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}

// Ambil data dari form tambah data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk menambah data ke tabel users
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === true) {
        echo 'Data berhasil ditambahkan!';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
$conn->close();
?>
