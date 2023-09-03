<?php
session_start();
error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
$conn = mysqli_connect('localhost', 'root', '', 'informatika'); 
// mysqli_select_db('informatika');
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$submit = $_POST['submit'];
if($submit) {
    $sql = "select * from pengguna where Username = '$Username' 
    and Password = '$Password'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    if($row['Username'] != "") {
        //berhasil login
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['Status'] = $row['Status'];
        ?>
        <script language="javascript">
            alert('Anda Login Sebagai <?php echo $row['Username']; ?>');
            if ("<?php echo $Username; ?>" === "Admin") {
                document.location = 'hasillogin2.php';
            } else {
                document.location = 'hasillogin.php';
            }
        </script>
        <?php
        } else {
        //gagal login
        ?>
        <script language script = "javascript">
            alert('Gagal Login');
            document.location = 'login.php';
        </script>
        <?php
    }
}
?>
<form method = 'POST' action = 'login.php'>
    <p align = 'center'>
        Username : <input type = 'text' name = 'Username'><br>
        Password : <input type = 'password' name ='Password'><br>
        <input type = 'submit' name = 'submit'>
    </p>
</form>
