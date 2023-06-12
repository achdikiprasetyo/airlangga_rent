<?php include '../template/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <style>
        .container {
            margin-left: 16px;
            margin-top: 12px;
        }

        .container a {
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 40px;
            font-size: 16px;
            cursor: pointer;
            color: aliceblue;
        }

        table tr td{
            font-style: bold;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Pembayaran</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $metodePembayaran = $_POST['metode_pembayaran'];
            $hargaTotal = isset($_POST['harga_total']) ? intval($_POST['harga_total']) : 0;
            $biayaPengiriman = isset($_POST['biaya_pengiriman']) ? intval($_POST['biaya_pengiriman']) : 0;
            $totalHarga = $hargaTotal + $biayaPengiriman;

            echo "<hr>";
            echo '<div style="font-weight: bold;">';
            echo 'Metode Pembayaran: Transfer';
            echo '<table>';
            echo '    <tr>';
            echo '        <td>BCA :</td>';
            echo '        <td>082157126</td>';
            echo '    </tr>';
            echo '    <tr>';
            echo '        <td>BNI :</td>';
            echo '        <td>98712537</td>';
            echo '    </tr>';
            echo '    <tr>';
            echo '        <td>Shopepay :</td>';
            echo '        <td>082247424827</td>';
            echo '    </tr>';
            echo '</table>';
            echo '</div>';
            
            echo "<hr>";
            echo "<br>";
            echo "<h3 id='hargaTotal'>Total Harga yang harus dibayar:  Rp $totalHarga,-</h3>";

            echo "<h3>Kirim bukti pemesanan / pembayaran disini : </h3>";
            echo "<br>";    
            echo '<a href="https://wa.me/6282247424826">Kirim Bukti Pembayaran</a>';
        }
        ?>
    </div>
</body>
</html>
