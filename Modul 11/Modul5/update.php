<?php
	$conn = mysqli_connect('localhost', 'root', '','modul5');
	
	$kode_gudang = $_POST['kode_gudang'];
	$nama_gudang = $_POST['nama_gudang'];
	$lokasi = $_POST['lokasi'];
	$submit = $_POST['submit'];
	$update = "UPDATE gudang set kode_gudang ='$kode_gudang', nama_gudang ='$nama_gudang', lokasi = '$lokasi' WHERE kode_gudang ='$kode_gudang' ";
	
	if($submit){
		mysqli_query($conn,$update);
		echo "
		<script>
            alert('data berhasil di update');
            document.location.href='modul5.php';
		</script>";
		}	
?>