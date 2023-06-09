<?php
# Menghapus sesi
session_start();
session_destroy();

# Mengarahkan pengguna ke halaman login
header("Location: ../index.php");
exit();
?>
