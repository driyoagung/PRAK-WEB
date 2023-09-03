<?php
session_start();
session_destroy();
?>
<script language script = "javascript">
    alert ('Anda Telah Logout');
    document.location = 'login.php';
</script>