<?php include 'header_admin.php'; ?>
<?php
// Koneksi ke database
include '../koneksi.php';

// Tampilkan daftar pemesanan
$sql = "SELECT * FROM pemesanan";
$result = $conn->query($sql);

echo "<html>
        <head>
            <title>Daftar Pemesanan</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 20px;
                    background-color: #f5f5f5;
                }

                h1 {
                    text-align: center;
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    background-color: #fff;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                }

                th, td {
                    padding: 12px 16px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }

                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                .delete-link button {
                    background-color: red;
                    color: white;
                    border: none;
                    padding: 5px 10px;
                    border-radius: 4px;
                    transition: background-color 0.3s ease;
                }

                .delete-link button:hover {
                    background-color: darkred;
                }

                tr:hover {
                    background-color: #e9e9e9;
                }

                .delete-link button:active {
                    background-color: darkred;
                }
            </style>
        </head>
        <body>
            <h1>Daftar Pemesanan</h1>";

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID Pemesanan</th>
                <th>ID User</th>
                <th>ID Mobil</th>
                <th>ID Admin</th>
                <th>Tanggal Pesan</th>
                <th>Tanggal Selesai</th>
                <th>Metode Pembayaran</th>
                <th>Harga Total</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id_pemesanan']."</td>
                <td>".$row['id_user']."</td>
                <td>".$row['id_mobil']."</td>
                <td>".$row['id_admin']."</td>
                <td>".$row['tgl_pesan']."</td>
                <td>".$row['tgl_selesai']."</td>
                <td>".$row['metode_pembayaran']."</td>
                <td>".$row['harga_total']."</td>
                <td><a class='delete-link' href='hapus_pemesanan.php?id=".$row['id_pemesanan']."'><button>Hapus</button></a></td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Tidak ada pemesanan mobil.</p>";
}

echo "</body>
    </html>";

$conn->close();
?>
