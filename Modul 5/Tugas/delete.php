<?php
	$conn= mysqli_connect('localhost', 'root', '','modul5');
	
	$kode_gudang = $_GET['kode_gudang'];
	$hapus = "delete from gudang where kode_gudang = '$kode_gudang'";
	$data = mysqli_query($conn,$hapus);
	
	if($data > 0){
		echo "
		<script>
		alert('data berhasil di hapus');
		document.location.href='modul5.php';
		</script>";
	}else
		echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='modul5.php';
		</script>";
?>