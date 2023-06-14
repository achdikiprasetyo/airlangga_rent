<?php include '../template/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        .container {
            margin: 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex-grow: 1;
        } 

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ddd;
        }

        table {
            margin-bottom: 20px;
        }

        table tr td {
            font-weight: bold;
            padding: 5px;
        }

        .payment-method {
            margin-bottom: 20px;
            font-weight: bold;
        }

        .payment-method table {
            margin-bottom: 10px;
        }

        .total-price {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .proof-link {
            display: inline-block;
            background-color: green;
            border: none;
            border-radius: 5px;
            padding: 8px 20px;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            font-weight: bold;
            font-family: "Average Sans", sans-serif;
        }
        .proof-link a{
            color: white;
        }

        .proof-link:hover {
            background-color: darkgreen;
            text-decoration: none;
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
            ?>

            <div class="payment-method">
                <h3>Metode Pembayaran: Transfer</h3>
                <table>
                    <tr>
                        <td>BCA:</td>
                        <td>082157126</td>
                    </tr>
                    <tr>
                        <td>BNI:</td>
                        <td>98712537</td>
                    </tr>
                    <tr>
                        <td>Shopepay:</td>
                        <td>082247424827</td>
                    </tr>
                </table>
            </div>

            <div class="total-price">
                <h3>Total Harga yang harus dibayar: Rp <?php echo $totalHarga; ?>,-</h3>
            </div>

            <div class="proof-link">
                <a href="https://wa.me/6282247424826" style="text-decoration: none;">Kirim Bukti Pembayaran</a>
            </div>

        <?php
        }
        ?>
    </div>
</body>
</html>

<?php include '../template/footer.php'; ?>