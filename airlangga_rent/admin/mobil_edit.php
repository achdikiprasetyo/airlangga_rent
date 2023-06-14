<?php
include '../koneksi.php';

// Mengambil ID mobil yang akan diedit dari parameter URL
$idMobil = $_GET['id'];

// Mengambil data mobil dari database berdasarkan ID
$query = "SELECT * FROM mobil WHERE id_mobil = '$idMobil'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Memeriksa apakah data mobil ditemukan
if (!$row) {
    echo "Data mobil tidak ditemukan.";
    exit;
}

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $merk = $_POST['merk'];
    $noPlat = $_POST['no_plat'];
    $stok = $_POST['stok'];
    $kapasitas = $_POST['kapasitas'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $jenisBahanBakar = $_POST['jenis_bahan_bakar'];

    // Update data mobil di database
    $sql = "UPDATE mobil SET merk='$merk', no_plat='$noPlat', stok='$stok', kapasitas='$kapasitas', tahun='$tahun', harga='$harga', status='$status', jenis_bahan_bakar='$jenisBahanBakar' WHERE id_mobil='$idMobil'";
    if ($conn->query($sql) === TRUE) {
        // Mengatur pesan untuk ditampilkan pada halaman sebelum melakukan redirect
        $_SESSION['success_message'] = "Data mobil berhasil diperbarui.";
        header("Location: view_edit.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mobil</title>
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

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #0069d9;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .update-button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        .update-button:hover {
            background-color: darkgreen;
        }

    </style>
    <script>
        function showPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "block";
            var popupDuration = 50000; // Durasi pop-up ditampilkan (dalam milidetik)
            setTimeout(function() {
                popup.style.display = "none";
            }, popupDuration);
        }
    </script>
</head>
<body>
<div class="container">
    <h1>Edit Mobil</h1>
    <table>
        <form action="mobil_edit.php?id=<?php echo $idMobil; ?>" method="post" enctype="multipart/form-data">

            <tr>
                <td><label for="merk">Merk:</label></td>
                <td><input type="text" name="merk" value="<?php echo $row['merk']; ?>" required></td>
            </tr>

            <tr>
                <td><label for="no_plat">No. Plat:</label></td>
                <td><input type="text" name="no_plat" value="<?php echo $row['no_plat']; ?>" required><br></td>
            </tr>

            <tr>
                <td><label for="stok">Stok:</label></td>
                <td><input type="number" name="stok" value="<?php echo $row['stok']; ?>" required><br></td>
            </tr>

            <tr>
                <td><label for="kapasitas">Kapasitas:</label></td>
                <td><input type="number" name="kapasitas" value="<?php echo $row['kapasitas']; ?>" required><br></td>
            </tr>

            <tr>
                <td><label for="tahun">Tahun:</label></td>
                <td><input type="number" name="tahun" value="<?php echo $row['tahun']; ?>" required><br></td>
            </tr>

            <tr>
                <td><label for="harga">Harga:</label></td>
                <td><input type="number" name="harga" value="<?php echo $row['harga']; ?>" required><br></td>
            </tr>

            <tr>
                <td><label for="status">Status:</label></td>
                <td>
                    <select name="status" required>
                        <option value="Tersedia" <?php if ($row['status'] == 'Tersedia') echo 'selected'; ?>>Tersedia</option>
                        <option value="Disewakan" <?php if ($row['status'] == 'Disewakan') echo 'selected'; ?>>Disewakan</option>
                    </select><br>
                </td>
            </tr>

            <tr>
                <td><label for="jenis_bahan_bakar">Jenis Bahan Bakar:</label></td>
                <td><input type="text" name="jenis_bahan_bakar" value="<?php echo $row['jenis_bahan_bakar']; ?>" required><br></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" class="update-button" value="Update Mobil">
                </td>
            </tr>
        </form>
    </table>
</div>

</body>
</html>