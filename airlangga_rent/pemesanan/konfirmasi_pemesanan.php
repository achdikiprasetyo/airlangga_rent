<?php include '../template/header.php'; ?>
<?php include '../koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <style>
        .kotak-abu {
            display: block;
            background-color: lightgray;
            padding: 10px;
            margin: 20px;
            font-weight: bold;
            border-bottom: 10px;
        }

        label {
            margin-right: 10px;
        }

        input[type="radio"] {
            transform: scale(1.5);
            float: right;
            margin-top: 10px;
        }

        .car-container {
            display: flex;
            align-items: flex-start;
            margin: 5px;
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
        
        form {
            margin-left: 16px;
        }

        .tombol{
            background-color: green;
            color: white;
            border: none;
            border-radius: 10px ;
            padding: 11px 40px;
            margin-top: 10px;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <div class='kotak-abu'>
        <h2>Detail Pemesanan</h2>
    </div>
    <?php
    if (isset($_GET['id_pemesanan'])) {
        $idPemesanan = $_GET['id_pemesanan'];

        $sql = "SELECT pemesanan.*, mobil.merk, mobil.no_plat, mobil.stok, mobil.kapasitas, mobil.harga, mobil.status, mobil.foto_mobil, mobil.harga * DATEDIFF(pemesanan.tgl_selesai, pemesanan.tgl_pesan) AS harga_total
        FROM pemesanan 
        INNER JOIN mobil ON pemesanan.id_mobil = mobil.id_mobil 
        WHERE pemesanan.id_pemesanan = $idPemesanan";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $idMobil = $row["id_mobil"];
            $tglPesan = $row["tgl_pesan"];
            $tglSelesai = $row["tgl_selesai"];
            $hargaTotal = $row["harga_total"];

            $merk = $row["merk"];
            $noPlat = $row["no_plat"];
            $stok = $row["stok"];
            $kapasitas = $row["kapasitas"];
            $harga = $row["harga"];
            $status = $row["status"];
            $fotoMobil = $row["foto_mobil"];
            $metode_pembayaran = $row["metode_pembayaran"];

            $sqlMobil = "SELECT * FROM mobil WHERE id_mobil = $idMobil";
            $resultMobil = $conn->query($sqlMobil);
            
            
            $queryUpdateHargaTotal = "UPDATE pemesanan SET harga_total = $hargaTotal, metode_pembayaran = '$metode_pembayaran' WHERE id_pemesanan = $idPemesanan";
            $conn->query($queryUpdateHargaTotal);

            if ($resultMobil->num_rows > 0) {
                $rowMobil = $resultMobil->fetch_assoc();

                $merk = $rowMobil["merk"];
                $fotoMobil = $rowMobil["foto_mobil"];
                //detail mobil yang dipesan
                echo "<form action='proses_konfirmasi.php?harga_total=$hargaTotal' method='POST'>";
                
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

                echo "<p>Tanggal Pesan: $tglPesan</p>";
                echo "<p>Tanggal Selesai: $tglSelesai</p>";

                //checkbox untuk biaya pengiriman
                echo '<input type="checkbox" id="iya" onchange="updateHargaTotal()">';
                echo '<label for="iya">Mobil Di Antar ke Alamat Rumah</label>';
                echo '<h1>Metode Pembayaran</h1>';

                //metode pembayaran
                echo '<div class="kotak-abu">';
                echo '    <div class="kotak-panjang"></div>';
                echo '    <label for="transfer">Transfer</label>';
                echo '    <input type="radio" id="Transfer" name="metode_pembayaran" value="Transfer">';
                echo '</div>';

                echo '<div class="kotak-abu">';
                echo '    <div class="kotak-panjang"></div>';
                echo '    <label for="cash">Cash</label>';
                echo '    <input type="radio" id="Cash" name="metode_pembayaran" value="Cash">';
                echo '</div>';

                //rincian harga
                echo "    <h2>Rincian Pesanan</h2>";
                echo "    <table>";
                echo "        <tr>";
                echo "            <td>Subtotal</td>";
                echo "            <td id='hargaTotal'>$hargaTotal</td>";
                echo "        </tr>";
                echo "        <tr>";
                echo "            <td>Biaya Pengiriman</td>";
                echo '            <td id="biayaPengiriman">0</td>';
                echo "        </tr>";
                echo "        <tr>";
                echo "            <td>Total</td>";
                echo '            <td id="total">' . $hargaTotal . '</td>';
                echo "        </tr>";
                echo "    </table>";
                
                echo "    <input type='hidden' name='id_pemesanan' value='$idPemesanan'>";
                echo "<input type='hidden' name='harga_total' value='" . $hargaTotal . "'>";
                echo "<input type='hidden' name='biaya_pengiriman' value='0' id='biayaPengirimanInput'>";

                echo "    <input type='submit' value='Konfirmasi Pemesanan' class='tombol'>";
                echo "</form>";
            } else {
                echo "Data mobil tidak ditemukan.";
            }
        } else {
            echo "Data pemesanan tidak ditemukan.";
        }
    } else {
        echo "ID pemesanan tidak ditemukan.";
    }
    ?>

    <script>
        function updateHargaTotal() {
            var hargaTotal = <?php echo $hargaTotal; ?>;
            var biayaPengiriman = 75000;

            var checkbox = document.getElementById("iya");
            var hargaTotalElement = document.getElementById("hargaTotal");
            var biayaPengirimanElement = document.getElementById("biayaPengiriman");
            var totalElement = document.getElementById("total");
            var biayaPengirimanInput = document.getElementById("biayaPengirimanInput");

            if (checkbox.checked) {
                hargaTotal += biayaPengiriman;
                biayaPengirimanElement.innerText = biayaPengiriman;
                totalElement.innerText = hargaTotal;
                biayaPengirimanInput.value = biayaPengiriman;
            } else {
                hargaTotal -= biayaPengiriman;
                biayaPengirimanElement.innerText = "0";
                totalElement.innerText = hargaTotal;
                biayaPengirimanInput.value = "0";
            }
        }
    </script>


</body>
</html>
<?php include '../template/footer.php'; ?>
