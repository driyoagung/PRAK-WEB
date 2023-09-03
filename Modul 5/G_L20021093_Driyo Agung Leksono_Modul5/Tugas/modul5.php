<html> 
<head><title>Data Gudang Tugas Modul 5</title></head> 
<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'modul5'); 
?> 
<body> 
    <center> 
        <h3>Data Gudang</h3> 
        <table border='0' width='30%'> 
            <form method='POST' action='modul5.php'> 
                <tr> 
                    <td width='25%'>kode_gudang</td> 
                    <td width='5%'>:</td> 
                    <td width='65%'><input type='text' name='kode_gudang' size='20'></td></tr> 
                    <td width='25%'>nama_gudang</td> 
                    <td width='5%'>:</td> 
                    <td width='65%'><input type='text' name='nama_gudang' size='20'></td></tr> 
                    <td width='25%'>lokasi</td> 
                    <td width='5%'>:</td> 
                    <td width='65%'><input type='text' name='lokasi' size="30"></td></tr>
                </table> 
                <input type='submit' value='Masukkan' name='submit'> 
            </form> 
            
            <?php error_reporting(0); 
            $kode_gudang = $_POST['kode_gudang']; 
            $nama_gudang = $_POST['nama_gudang']; 
            $lokasi = $_POST['lokasi']; 
            $submit = $_POST['submit']; 
            $input = "insert into gudang (kode_gudang, nama_gudang, lokasi) values ('$kode_gudang', '$nama_gudang', '$lokasi')"; 
            if($submit){ 
                if($kode_gudang==''){ 
                    echo "</br>Kode Gudang tidak boleh kosong, diisi dulu"; 
                }elseif($nama_gudang==''){ 
                    echo "</br>Nama Gudang tidak boleh kosong, diisi dulu"; 
                }elseif($lokasi==''){ 
                    echo "</br>Lokasi tidak boleh kosong, diisi dulu"; 
                }else{ 
                    mysqli_query($conn,$input); 
                    echo'</br>Data berhasil dimasukkan'; 
                } 
            } 
            ?> 

            <hr> 
            <H3>Data Gudang</H3> 
            <table border='1' width='50%'> 
                <tr> 
                    <td align='center' width='20%'><b>kode_gudang</b></td> 
                    <td align='center' width='20%'><b>nama_gudang</b></td> 
                    <td align='center' width='30%'><b>lokasi</b></td> 
                    <td align='center' width='30%'><b>Keterangan Gudang</b></td>
                    <td colspan=2 align='center' width='30%'><b>Keterangan</b></td>
                </tr> 

                <?php 
                $cari="select * from gudang order by kode_gudang"; 
                $hasil_cari = mysqli_query($conn,$cari); 
                while($data = mysqli_fetch_row($hasil_cari)){ 
                    echo"
                    <tr>
                        <td width='20%'>$data[0]</td>
                        <td width='20%'>$data[1]</td>
                        <td width='30%'>$data[2]</td>
                        <td><a href = 'T5no2.php?kode_gudang=$data[0]'>Ubah</a></td>
                        <td><a href = 'delete.php?kode_gudang=$data[0]'>Hapus</a></td>
                        </tr>";
                }
                ?> 
            </table>
        </center>
    </body>
</head>