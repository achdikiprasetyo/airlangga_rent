<?php
// Koneksi ke database
include '../koneksi.php';

// Periksa apakah parameter ID pemesanan diberikan melalui URL
if (isset($_GET['id'])) {
    // Dapatkan nilai ID pemesanan dari parameter URL
    $id_pemesanan = $_GET['id'];

    // Hapus pemesanan berdasarkan ID
    $sql = "DELETE FROM pemesanan WHERE id_pemesanan = $id_pemesanan";
    if ($conn->query($sql) === TRUE) {
        // Redirect kembali ke halaman daftar pemesanan setelah menghapus
        header("Location: daftar_pemesanan.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID pemesanan tidak ditemukan.";
}

$conn->close();
?>