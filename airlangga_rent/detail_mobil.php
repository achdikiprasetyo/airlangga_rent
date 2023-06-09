<?php include 'bootstrap.php'; ?>
<?php include 'header.php'; ?>
<?php include 'koneksi.php'; ?>
<style>
    .car-container {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
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
        echo "        <img src='$fotoMobil' alt='Foto Mobil'>";
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
        echo "        <a href='pemesanan.php?id_mobil=$idMobil'>Sewa</a>";
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
