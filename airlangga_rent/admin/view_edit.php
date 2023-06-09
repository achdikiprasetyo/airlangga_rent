<?php include 'header_admin.php';?>
<?php include '../koneksi.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mobil</title>
   <style>
    /* Gaya umum */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    h1 {
        text-align: center;
    }

    /* Container untuk kartu mobil */
    .data-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Mengatur posisi horizontal menjadi tengah */
        gap: 20px; /* Jarak antara kartu */
    }

    /* Kartu mobil */
    .mobil-card {
        width: 300px;
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px; /* Mengatur jarak vertikal antar kartu */
        background-color: #f9f9f9;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .mobil-card:hover {
        transform: translateY(-5px); /* Efek mengangkat kartu saat dihover */
    }

    .mobil-card img {
        max-width: 100%;
        height: auto;
    }

    .mobil-card p {
        margin: 8px 0;
    }

    .mobil-card .edit-link {
        display: block;
        text-align: right;
        margin-top: 10px;
        color: #999;
        font-size: 14px;
        text-decoration: none;
        transition: color 0.3s;
    }
    .mobil-card .hapus-link {
        display: block;
        text-align: right;
        margin-top: 10px;
        color: #999;
        font-size: 14px;
        text-decoration: none;
        transition: color 0.3s;
    }

</style>
</head>
<body>
    <h1>Data Mobil</h1>
    <div class="data-container">
        <?php
        // Ambil data mobil dari database dan tampilkan
        $query = "SELECT * FROM mobil";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $idMobil = $row['id_mobil'];
            $merk = $row['merk'];
            $noPlat = $row['no_plat'];
            $stok = $row['stok'];
            $kapasitas = $row['kapasitas'];
            $tahun = $row['tahun'];
            $harga = $row['harga'];
            $status = $row['status'];
            $jenisBahanBakar = $row['jenis_bahan_bakar'];
            $fotoMobil = $row['foto_mobil'];

            echo "<div class='mobil-card'>";
            echo "<img src='../foto_mobil/$fotoMobil' alt='Foto Mobil'>";
            echo "<p>Merk: $merk</p>";
            echo "<p>No. Plat: $noPlat</p>";
            echo "<p>Stok: $stok</p>";
            echo "<p>Kapasitas: $kapasitas</p>";
            echo "<p>Tahun: $tahun</p>";
            echo "<p>Harga: $harga</p>";
            echo "<p>Status: $status</p>";
            echo "<p>Jenis Bahan Bakar: $jenisBahanBakar</p>";
            echo "<a class='edit-link' href='mobil_edit.php?id=$idMobil'>Edit</a>";
            echo "<a class='hapus-link' href='mobil_hapus.php?id=$idMobil'>Hapus</a>";
            echo "</div>";
        }

        // Menutup koneksi ke database
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
