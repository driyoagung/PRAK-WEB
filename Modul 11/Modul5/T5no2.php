<?php
$conn = mysqli_connect('localhost', 'root','','modul5');
$kode_gudang = $_GET['kode_gudang'];
$cari = "select * from gudang where kode_gudang = '$kode_gudang'";
$hasil_cari = mysqli_query($conn,$cari);
$data = mysqli_fetch_array($hasil_cari);
function active_radio_button($value,$input){
    $result = $value==$input? 'checked':'';
    return $result;
}

if($data > 0){
?>
<html>
<head>
<title>Data Gudang</title>
</head>				
<body>
    <h3>GUDANG</h3>
    <table>
        <form method="POST" action="update.php">
        <tr>
            <td>Kode Gudang</td>
            <td>:</td>
            <td><input type="text" name="kode_gudang" size="20" value="<?php echo $data['kode_gudang']?>"></td>
        </tr>
        <tr>
            <td>Nama Gudang</td>
            <td>:</td>
            <td><input type="text" name="nama_gudang" size="20" value="<?=$data['nama_gudang']?>"></td>
        </tr>
        <tr>
            <td>Lokasi</td>
            <td>:</td>
            <td><input type="text" name="lokasi" size="30" value="<?=$data['lokasi']?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="UPDATE DATA"></td>
        </tr>
        </form>
    </table>
<?php
}
?>
</body>
</html>