<?php include 'header_admin.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Input dan Output Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: auto;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
            font-size: 14px;
        }

        input[type="file"] {
            margin-top: 10px;
        }

        input[type="submit"] {
            margin-top: 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Input Mobil Baru</h1>
    <form action="simpan_mobil.php" method="post" enctype="multipart/form-data">
        <label for="merk">Merk:</label>
        <input type="text" name="merk" required><br>

        <label for="no_plat">No. Plat:</label>
        <input type="text" name="no_plat" required><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" required><br>

        <label for="kapasitas">Kapasitas:</label>
        <input type="number" name="kapasitas" required><br>

        <label for="tahun">Tahun:</label>
        <input type="number" name="tahun" required><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" required><br>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="Tersedia">Tersedia</option>
            <option value="Disewakan">Disewakan</option>
        </select><br>

        <label for="jenis_bahan_bakar">Jenis Bahan Bakar:</label>
        <input type="text" name="jenis_bahan_bakar" required><br>

        <label for="foto_mobil">Foto Mobil:</label>
        <input type="file" name="foto_mobil" required><br>

        <input type="submit" value="Tambah Mobil">
    </form>
</body>
</html>
