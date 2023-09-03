<!DOCTYPE html>
<html>
<head>
    <title>Data Page</title>
</head>
<body>
    <h2>Data Page</h2>

    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'uas';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Koneksi gagal: ' . $conn->connect_error);
    }

    // Query untuk mendapatkan data dari tabel users
    $sql = 'SELECT * FROM users';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" .
                $row['id'] .
                "</td>
                    <td>" .
                $row['username'] .
                "</td>
                </tr>";
        }
        echo '</table>';
    } else {
        echo 'Tidak ada data.';
    }
    $conn->close();
    ?>

    <h2>Tambah Data</h2>
    <form action="tambah_data.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
