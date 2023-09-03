<?php
$conn = mysqli_connect('localhost', 'root', '', 'informatika'); ?>
<html>
<head>
	<title>DATA Barang</title>
</head>
<body>
	<h3>Data Barang</h3>
	<a href='form2.php'>Tambah Data Barang</a><br><br>
	<table border='1'>
		<tr>
			<td>Kode Barang</td>
			<td>Nama Barang</td>
			<td>Lokasi Gudang</td>
			
			<td colspan=2 align="center">Aksi</td>
		</tr>
		<?php
  $cari = 'select * from barang order by kode_barang';
  $hasil_cari = mysqli_query($conn, $cari);
  //mengambil satu array dari tabel mahasiswa
  //fungsi ini akan mengembalikan nilai false di baris array terakhir
  while ($data = mysqli_fetch_array($hasil_cari)) {
      echo "<tr>
				<td>$data[kode_barang]</td>
				<td>$data[nama_barang]</td>
				<td>$data[kode_gudang]</td>
				<td><a href='update_form2.php?kode_barang=$data[kode_barang]'>Edit</a></td>
				<td><a href='delete.php?kode_barang=$data[kode_barang]'>Delete</a></td>
				</tr>";
  }
  ?>
	</table>
	</body>
</html>