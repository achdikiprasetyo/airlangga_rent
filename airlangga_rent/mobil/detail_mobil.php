<?php include '../koneksi.php';
session_start();
# menonaktifkan laporan kesalahan php
error_reporting(0);

# memeriksa apakah sudah memiliki sesi yang aktif dengan username. Jika tidak, akan diarahkan ke halaman login.php menggunakan fungsi header().
if (!isset($_SESSION['username'])) {
    header("Location: ../login/login.php");
    exit();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
    <style>
        .car-container {
            display: flex;
            align-items: flex-start;
            padding: 25px 10px 25px 0px;
        }   
        .car-image {
            margin-right: 20px;
        }
        .btnsewa a{
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 40px;
            font-size: 16px;
            margin-left: 16px;
            cursor: pointer;
            margin-top: 10px;
            color: aliceblue;
        }
        .car-image img {
            max-width: 560px;
            height: auto;
            margin-left: 16px;
            
        }
    </style>
    <?php include '../template/header.php'; ?>
</head>
<body>
    <?php
    if (isset($_GET['id_mobil'])) {
        $idMobil = $_GET['id_mobil'];

        $sql = "SELECT * FROM mobil WHERE id_mobil = '$idMobil'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $merk = $row["merk"];
            $noPlat = $row["no_plat"];
            $stok = $row["stok"];
            $kapasitas = $row["kapasitas"];
            $tahun = $row["tahun"];
            $harga = $row["harga"];
            $status = $row["status"];
            $jenisBahanBakar = $row["jenis_bahan_bakar"];
            $fotoMobil = $row["foto_mobil"];

            echo "<div class='car-container'>";
            echo "    <div class='car-image'>";
            echo "        <img src='../foto_mobil/$fotoMobil' alt='Foto Mobil'>";
            echo "    </div>";
            echo "    <div class='car-details'>";
            echo "        <h3>$merk</h3>";
            echo "        <p>No. Plat: $noPlat</p>";
            echo "        <p>Stok: $stok</p>";
            echo "        <p>Kapasitas: $kapasitas</p>";
            echo "        <p>Tahun: $tahun</p>";
            echo "        <p>Harga: $harga</p>";
            echo "        <p>Status: $status</p>";
            echo "        <p>Jenis Bahan Bakar: $jenisBahanBakar</p>";
            echo "        <div class='btnsewa'>";
            echo "        <a href='../pemesanan/pemesanan.php?id_mobil=$idMobil'>Sewa</a>";
            echo "        </div>";
            echo "    </div>";
            echo "</div>";
        } else {
            echo "Mobil tidak ditemukan.";
        }

        $conn->close();
    } else {
        echo "ID Mobil tidak ditemukan.";
    }
    ?>
</body>
</html>










<?php include '../template/footer.php'; ?>
