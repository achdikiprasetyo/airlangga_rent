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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
        .car-container {
            display: flex;
            align-items: flex-start;
            padding: 25px 10px 25px 0px;
        }   
        .car-image {
            margin-right: 20px;
        }
        .car-details {
            display: flex;
            flex-direction: column;
        }
        .car-details h3 {
            margin: 0;
        }
        .car-details p {
            display: flex;
            align-items: center;
            margin: 8px 0;
        }
        .car-details p i {
            margin-right: 8px;
        }
        .btn-sewa {
            display: flex;
            justify-content: flex-end;
            margin-top: -30px;
            position: absolute;
            top: 425px; /* Sesuaikan dengan tinggi navbar Anda */
            right: 20px; /* Sesuaikan dengan jarak dari tepi kanan */
        }
        .btn-sewa a {
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 20px;
            font-size: 16px;
            cursor: pointer;
            color: aliceblue;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-sewa a:hover {
            background-color: darkred;
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
            echo "        <p><i class='fas fa-car'></i> No. Plat: $noPlat</p>";
            echo "        <p><i class='fas fa-cubes'></i> Stok: $stok</p>";
            echo "        <p><i class='fas fa-users'></i> Kapasitas: $kapasitas</p>";
            echo "        <p><i class='fas fa-calendar'></i> Tahun: $tahun</p>";
            echo "        <p><i class='fas fa-money-bill'></i> Harga: $harga</p>";
            echo "        <p><i class='fas fa-info-circle'></i> Status: $status</p>";
            echo "        <p><i class='fas fa-gas-pump'></i> Jenis Bahan Bakar: $jenisBahanBakar</p>";
            echo "        <div class='btn-sewa'>";
            echo "            <a href='../pemesanan/pemesanan.php?id_mobil=$idMobil'>Sewa</a>";
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
