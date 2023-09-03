<?php
session_start();
echo "Anda Berhasil Login Sebagai ".$_SESSION['Username']." Dan Anda Terdaftar Sebagai ".$_SESSION['Status'];
?>
<br>
<h3>Data Pengguna</h3>
<table border='1' width='20%'>
    <tr>
        <td align='center' width='20%'><b>Username</b></td>
        <td align='center' width='30%'><b>Password</b></td>
        <td align='center' width='10%'><b>Nama</b></td>
        <td align='center' width='30%'><b>Status</b></td>
    </tr>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'informatika');
        $cari = "SELECT * FROM pengguna";
        $hasil_cari = mysqli_query($conn, $cari);
        while ($data = mysqli_fetch_assoc($hasil_cari)) {
            echo "
                <tr>
                    <td width='20%'>".$data['Username']."</td>
                    <td width='30%'>".$data['Password']."</td>
                    <td width='10%'>".$data['Nama']."</td>
                    <td width='30%'>".$data['Status']."</td>
                </tr>";
        }
        mysqli_close($conn);
    ?>
</table>
<br>
Silakan Logout dengan klik link <a href = "logout.php"> Disini </a>