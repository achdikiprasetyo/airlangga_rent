<?php
include '../koneksi.php';

// Menonaktifkan sementara konstrain foreign key
$query_disable_fk = "SET FOREIGN_KEY_CHECKS=0";
mysqli_query($conn, $query_disable_fk);

// Mengambil ID mobil yang akan dihapus dari parameter URL
$idMobil = $_GET['id'];

// Menghapus data mobil dari database berdasarkan ID
$query = "DELETE FROM mobil WHERE id_mobil = '$idMobil'";
$result = mysqli_query($conn, $query);

// Memeriksa apakah penghapusan berhasil
if ($result) {
    echo "Data mobil berhasil dihapus.";
    header("Location: view_edit.php");
} else {
    echo "Terjadi kesalahan saat menghapus data mobil.";
}

// Mengaktifkan kembali konstrain foreign key
$query_enable_fk = "SET FOREIGN_KEY_CHECKS=1";
mysqli_query($conn, $query_enable_fk);

// Menutup koneksi ke database
mysqli_close($conn);
?>
