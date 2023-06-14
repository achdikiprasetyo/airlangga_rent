<?php
include '../koneksi.php';

// Mengambil ID pengembalian yang akan dihapus dari parameter URL
$idPengembalian = $_GET['id'];

// Menghapus data pengembalian dari database berdasarkan ID
$query = "DELETE FROM pengembalian WHERE id_pengembalian = '$idPengembalian'";
$result = mysqli_query($conn, $query);

// Memeriksa apakah penghapusan berhasil
if ($result) {
    echo "Data pengembalian berhasil dihapus.";
    header("Location: laporan_pengembalian.php");
} else {
    echo "Terjadi kesalahan saat menghapus data pengembalian.";
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
