<?php
$conn = mysqli_connect('localhost', 'root', '', 'informatika');
$kode_barang = $_GET['kode_barang'];
$cari = "select * from barang where kode_barang= '$kode_barang'";
$hasil_cari = mysqli_query($conn, $cari);
$data = mysqli_fetch_array($hasil_cari);
function active_radio_button($value, $input)
{
    $result = $value == $input ? 'checked' : '';
    return $result;
}

if ($data > 0) { ?>
<html>
	<head>
		<title>Data Barang</title>
	</head>				
			<body>
				<h3>FORM Barang</h3>
				<table>
					<form method="POST" action="update2.php">
					<tr>
						<td>Kode Barang</td>
						<td>:</td>
						<td><input type="text" name="kode_barang" size="10" value="<?php echo $data[
          'kode_barang'
      ]; ?>"></td>
					</tr>
					<tr>
						<td>Nama Barang</td>
						<td>:</td>
						<td><input type="text" name="nama_barang" size="30" value="<?= $data[
          'nama_barang'
      ] ?>"></td>
					</tr>
					<tr>
						<td>Kode Gudang</td>
						<td>:</td>
						<td><input type="radio" name="kode_gudang" value="A" <?php echo active_radio_button(
          'A',
          $data['kode_gudang']
      ); ?>>A
							<input type="radio" name="kode_gudang" value="B"<?php echo active_radio_button(
           'B',
           $data['kode_gudang']
       ); ?>>B
							<input type="radio" name="kode_gudang" value="C"<?php echo active_radio_button(
           'C',
           $data['kode_gudang']
       ); ?>>C
						</td>
					</tr>
					<!-- <tr>
						<td>Alamat</td>
						<td>:</td>
						<td><input type="text" name="alamat" size="40" value="<?= $data[
          'Alamat'
      ] ?>"></td>
					</tr> -->
					<tr>
						<td><input type="submit" name="submit" value="UPDATE DATA"></td>
					</tr>
					</form>
				</table>
			<?php }
?>
				
			</body>
	</html>