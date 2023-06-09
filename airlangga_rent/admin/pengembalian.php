<?php include 'header_admin.php';?>
<?php
// Koneksi ke database
include '../koneksi.php';

// Tampilkan laporan pengembalian
$sql = "SELECT * FROM pengembalian";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID Pengembalian</th>
                <th>ID Pemesanan</th>
                <th>ID Admin</th>
                <th>Tanggal Kembali</th>
                <th>Kondisi Mobil</th>
                <th>Denda</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id_pengembalian']."</td>
                <td>".$row['id_pemesanan']."</td>
                <td>".$row['id_admin']."</td>
                <td>".$row['tgl_kembali']."</td>
                <td>".$row['kondisi_mobil']."</td>
                <td>".$row['denda']."</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada laporan pengembalian.";
}

$conn->close();
?>
