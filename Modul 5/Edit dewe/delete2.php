<?php
$conn = mysqli_connect('localhost', 'root', '', 'informatika');

$kode_barang = $_GET['kode_barang'];
$hapus2 = "delete from gudang where kode_barang='$kode_barang'";
$data = mysqli_query($conn, $hapus2);

if ($data > 0) {
    echo "
		<script>
		alert('data berhasil di hapus');
		document.location.href='index2.php';
		</script>";
} else {
    echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='index2.php';
		</script>";
}
?>
