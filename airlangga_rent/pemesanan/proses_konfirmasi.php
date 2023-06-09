
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Pembayaran</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $metodePembayaran = $_POST['metode_pembayaran'];
            //mengambil total harga dari page konfirmasi_pesanan
            $hargaTotal = $_POST['harga_total'];

            echo "<hr>";
            if ($metodePembayaran == "Cash") {
                
                echo "Metode Pembayaran: Cash";
                
            } elseif ($metodePembayaran == "Transfer") {
                echo "Metode Pembayaran: Transfer";
                echo "<table>";
                echo "    <tr>";
                echo "        <td>BCA :</td>";
                echo "        <td>082157126</td>";
                echo "    </tr>";
                echo "    <tr>";
                echo "        <td>BNI : </td>";
                echo "        <td>98712537</td>";
                echo "    </tr>";
                echo "    <tr>";
                echo "        <td>Shopepay : </td>";
                echo "        <td>082247424827</td>";
                echo "    </tr>";
                
                
                echo "</table>       ";
            } else {
                echo "Metode Pembayaran tidak valid.";
            }
            echo "<hr>";
            echo "<br>";
            echo "<h3 id='hargaTotal' >Total Harga yang harus di bayar:  Rp $hargaTotal ,-</h3>";

            echo "<h3>Kirim bukti pemesanan / pembayaran disini : </h3>";
            echo "<br>";    
            echo '<a href="https://wa.me/6282247424826">Kirim Bukti Pembayaran</a>';
            
        }
        ?>
    </div>
    
</body>
</html>

