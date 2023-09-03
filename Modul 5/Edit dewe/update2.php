<?php
$conn = mysqli_connect('localhost', 'root', '', 'informatika');

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$kode_gudang = $_POST['kode_gudang'];
$submit = $_POST['submit'];
$update2 = "UPDATE barang set kode_barang='$kode_barang', nama_barang='$nama_barang', kode_gudang='$kode_gudang' WHERE kode_barang='$kode_barang' ";

if ($submit) {
    if ($kode_barang = '') {
        echo 'Kode Barang tidak boleh kosong, diisi dulu';
    } elseif ($nama_barang = '') {
        echo 'Nama Barang tidak boleh kosong';
    } elseif ($kode_gudang = '') {
        echo 'Kode Gudang tidak boleh kosong';
    }
    if ($kode_barang = '') {
        echo 'Kode Barang tidak boleh kosong, diisi dulu';
    } else {
        mysqli_query($conn, $update2);
    }
    echo "
			<script>
			alert('data berhasil di update');
			document.location.href='form2.php';
			</script>";
}

?>
