<?php include 'header_admin.php'; ?>
<?php
// Koneksi ke database
include '../koneksi.php';

// Tampilkan laporan pengembalian
$sql = "SELECT * FROM pengembalian";
$result = $conn->query($sql);

echo "<html>
        <head>
            <title>Laporan Pengembalian</title>
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

                tr:hover {
                    background-color: #e9e9e9;
                    cursor: pointer;
                }
                
                .delete-link button {
                    background-color: red;
                    color: white;
                    border: none;
                    padding: 5px 10px;
                    border-radius: 4px;
                }
                
                .delete-link button:hover {
                    background-color: darkred;
                }
            </style>
        </head>
        <body>
            <h1>Laporan Pengembalian</h1>";

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID Pengembalian</th>
                <th>ID Pemesanan</th>
                <th>ID Admin</th>
                <th>Tanggal Kembali</th>
                <th>Kondisi Mobil</th>
                <th>Denda</th>
                <th></th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id_pengembalian']."</td>
                <td>".$row['id_pemesanan']."</td>
                <td>".$row['id_admin']."</td>
                <td>".$row['tgl_kembali']."</td>
                <td>".$row['kondisi_mobil']."</td>
                <td>".$row['denda']."</td>
                <td><a class='delete-link' href='hapus_pengembalian.php?id=".$row['id_pengembalian']."'><button>Hapus</button></a></td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Tidak ada laporan pengembalian.</p>";
}

echo "</body>
    </html>";

$conn->close();
?>
