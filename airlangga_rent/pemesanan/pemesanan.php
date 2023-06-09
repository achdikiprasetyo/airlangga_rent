<?php
ob_start(); // Memulai output buffer


include '../template/header.php';
include '../koneksi.php';
?>

<style>
    .car-container {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    .car-image {
        margin-right: 20px;
    }

    .car-image img {
        max-width: 220px;
        height: auto;
        margin-left: 16px;
        
    }

    .car-details1 {
        display: flex;
        flex-direction: column;
        margin: 0;
        text-align: left;
        margin-right: 100px;

    }

    .car-details2 {
        display: flex;
        flex-direction: column;
        margin-left: auto; 
        text-align: right;
        margin-right: 100px;
        
    }

    .button {
        background-color: red;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 40px;
        font-size: 16px;
        margin-left: 16px;
        cursor: pointer;
        margin-top: 10px;
    }


    .date-form {
        margin-bottom: 10px;
    }

    .date-input {
        display: flex;
        flex-direction: column;
        margin-bottom: 5px;
    }

    .date-input label {
        font-weight: bold;
        margin-left: 16px;
    }

    .date-input input[type="date"] {
        padding: 5px;
        border-radius: 5px;
        margin-left: 16px;
        width: 300px;
        border: 1px solid #ccc;
        
    }

    h1{
        margin-left: 16px;

    }

    form{
        padding: 30px 0px 30px 0px;
    }

</style>
    
    <h1>Detail Penyewaan</h1>
    
<?php
if (isset($_GET['id_mobil'])) {
    $idMobil = $_GET['id_mobil'];

    if (isset($_POST['sewa'])) {
        $tglPesan = $_POST['tgl_pesan'];
        $tglSelesai = $_POST['tgl_selesai'];

        
        $sqlInsert = "INSERT INTO pemesanan (id_mobil, tgl_pesan, tgl_selesai) VALUES ('$idMobil', '$tglPesan', '$tglSelesai')";
        if ($conn->query($sqlInsert) === TRUE) {
            $idPemesanan = $conn->insert_id;

            // Redirect
            header("Location: konfirmasi_pemesanan.php?id_pemesanan=$idPemesanan");
            exit();
        } else {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }
    }

    $sql = "SELECT * FROM mobil WHERE id_mobil = '$idMobil'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $merk = $row["merk"];
        $noPlat = $row["no_plat"];
        $stok = $row["stok"];
        $kapasitas = $row["kapasitas"];
        $harga = $row["harga"];
        $status = $row["status"];
        $fotoMobil = $row["foto_mobil"];
        
        echo "<div class='car-container'>";
        echo "    <div class='car-image'>";
        echo "        <img src='$fotoMobil' alt='Foto Mobil'>";
        echo "    </div>";
        echo "    <div class='car-details1'>";
        echo "        <h3>$merk</h3>";
        echo "        <p>No. Plat: $noPlat</p>";
        echo "        <p style='font-style:italic;'>Rp. $harga / hari</p>";
        echo "    </div>";
        echo "    <div class='car-details2'>";
        echo "        <p>Status: $status</p>";
        echo "        <p>Stok: $stok</p>";
        echo "    </div>";
        echo "</div>";
        echo "<hr>";

        echo "<form action='pemesanan.php?id_mobil=$idMobil' method='POST'>";
        echo "    <div class='date-form'>";
        echo "        <div class='date-input'>";
        echo "            <label for='tgl_pesan'>Tanggal Pesan</label>";
        echo "            <input type='date' name='tgl_pesan' id='tgl_pesan'>";
        echo "        </div>";
        echo "    </div>";
        echo "    <div class='date-form'>";
        echo "        <div class='date-input'>";
        echo "            <label for='tgl_selesai'>Tanggal Selesai</label>";
        echo "            <input type='date' name='tgl_selesai' id='tgl_selesai'>";
        echo "        </div>";
        echo "    </div>";
        echo "    <input type='submit' class='button' name='sewa' value='Sewa'>";
        echo "</form>";
        echo "</div>";
    } else {
        echo "Mobil tidak ditemukan.";
    }

    $conn->close();
} else {
    echo "ID Mobil tidak ditemukan.";
}

ob_end_flush(); // Mengakhiri output buffer
?>
<?php include '../template/footer.php'; ?>