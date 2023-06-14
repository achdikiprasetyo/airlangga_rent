<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mobil - Hasil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .success-message {
            text-align: center;
            font-size: 18px;
            color: #33cc33;
            margin-bottom: 20px;
            background-color: #e9f7ef;
            padding: 10px;
            border-radius: 8px;
        }

        .error-message {
            text-align: center;
            font-size: 18px;
            color: #ff0000;
            margin-bottom: 20px;
            background-color: #f8d7da;
            padding: 10px;
            border-radius: 8px;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    include '../koneksi.php';

    $merk = $_POST["merk"];
    $noPlat = $_POST["no_plat"];
    $stok = $_POST["stok"];
    $kapasitas = $_POST["kapasitas"];
    $tahun = $_POST["tahun"];
    $harga = $_POST["harga"];
    $status = $_POST["status"];
    $jenisBahanBakar = $_POST["jenis_bahan_bakar"];
    $fotoMobil = $_FILES["foto_mobil"]["tmp_name"];

    $sqlLastId = "SELECT MAX(id_mobil) AS lastId FROM mobil";
    $resultLastId = $conn->query($sqlLastId);
    if ($resultLastId->num_rows > 0) {
        $row = $resultLastId->fetch_assoc();
        $idMobil = $row["lastId"] + 1;
    } else {
        $idMobil = 1;
    }

    // Menyimpan foto mobil
    $fotoMobilPath = "../foto_mobil/" . $idMobil . ".jpg";
    move_uploaded_file($fotoMobil, $fotoMobilPath);

    $sqlInsertCar = "INSERT INTO mobil (id_mobil, merk, no_plat, stok, kapasitas, tahun, harga, status, jenis_bahan_bakar, foto_mobil)
                    VALUES ('$idMobil', '$merk', '$noPlat', '$stok', '$kapasitas', '$tahun', '$harga', '$status', '$jenisBahanBakar', '$fotoMobilPath')";

    if ($conn->query($sqlInsertCar) === TRUE) {
        echo "<h2>Mobil baru berhasil ditambahkan.</h2>";
        echo "<div class='success-message'>Mobil baru telah berhasil ditambahkan.</div>";
        echo "<a class='back-link' href='admin_add_mobil.php'>Kembali ke Halaman Tambah Mobil</a>";
    } else {
        echo "<h2>Error: Mobil gagal ditambahkan.</h2>";
        echo "<div class='error-message'>Terjadi kesalahan saat menambahkan mobil baru.</div>";
        echo "<a class='back-link' href='admin_add_mobil.php'>Kembali ke Halaman Tambah Mobil</a>";
    }

    $conn->close();
    ?>
</div>
</body>
</html>
