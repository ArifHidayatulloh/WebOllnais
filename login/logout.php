<?php 
session_start();
unset($_SESSION['stat_login']);
unset($_SESSION['user']);
unset($_SESSION['pass']);
session_destroy();
echo "<script>alert('Berhasil Logout'); document.location.href = '../index.php'</script>";

?>