<?php
	$conn= mysqli_connect('localhost', 'root', '','modul5');
?>
<html>
<head>
	<title>DATA GUDANG</title>
</head>
<body>
	<h3>Data Gudang</h3>
	<a href='modul5.php'>Tambah Data Gudang</a><br><br>
	<table border='1'>
		<tr>
			<td>kode_gudang</td>
			<td>nama_gudang</td>
			<td>lokasi</td>
			<td colspan=2 align="center">Aksi</td>
		</tr>
		<?php
		$cari = "select * from gudang order by kode_gudang";
		$hasil_cari = mysqli_query($conn,$cari);
		//mengambil satu array dari tabel mahasiswa
		//fungsi ini akan mengembalikan nilai false di baris array terakhir
		while ($data = mysqli_fetch_array($hasil_cari)){
			echo"<tr>
				<td>$data[kode_gudang]</td>
				<td>$data[nama_gudang]</td>
				<td>$data[lokasi]</td>
				<td><a href='update.php?kode_gudang=$data[kode_gudang]'>Edit</a></td>
				<td><a href='delete.php?kode_gudang=$data[kode_gudang]'>Delete</a></td>
				</tr>";
		}
		?>
	</table>
	</body>
</html>