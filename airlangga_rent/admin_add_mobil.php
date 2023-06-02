<!DOCTYPE html>
<html>
<head>
    <title>Input dan Output Mobil</title>
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
