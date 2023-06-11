<?php include 'header_admin.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Input dan Output Mobil</title>
    <style>
        body {
    font-family: Arial, sans-serif;
}

h1 {
    color: #333;
    text-align: center;
}

table {
    width: 400px;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #f8f8f8;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table tr {
    border-bottom: 1px solid #ddd;
}

table th,
table td {
    padding: 10px;
}

table th {
    text-align: left;
    background-color: #f2f2f2;
    color: #333;
}

input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="file"] {
    width: 100%;
    padding: 5px;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    <h1>Input Mobil Baru</h1>
    <form action="simpan_mobil.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th><label for="merk">Merk:</label></th>
                <td><input type="text" name="merk" required></td>
            </tr>

            <tr>
                <th><label for="no_plat">No. Plat:</label></th>
                <td><input type="text" name="no_plat" required></td>
            </tr>

            <tr>
                <th><label for="stok">Stok:</label></th>
                <td><input type="number" name="stok" required></td>
            </tr>

            <tr>
                <th><label for="kapasitas">Kapasitas:</label></th>
                <td><input type="number" name="kapasitas" required></td>
            </tr>

            <tr>
                <th><label for="tahun">Tahun:</label></th>
                <td><input type="number" name="tahun" required></td>
            </tr>

            <tr>
                <th><label for="harga">Harga:</label></th>
                <td><input type="number" name="harga" required></td>
            </tr>

            <tr>
                <th><label for="status">Status:</label></th>
                <td>
                    <select name="status" required>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Disewakan">Disewakan</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th><label for="jenis_bahan_bakar">Jenis Bahan Bakar:</label></th>
                <td><input type="text" name="jenis_bahan_bakar" required></td>
            </tr>

            <tr>
                <th><label for="foto_mobil">Foto Mobil:</label></th>
                <td><input type="file" name="foto_mobil" required></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Tambah Mobil">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
</body>
</html>
