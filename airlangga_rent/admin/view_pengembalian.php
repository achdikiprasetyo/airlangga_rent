<?php include '../koneksi.php';?>
<?php include 'header_admin.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengembalian</title>
</head>
<body>
    <h1>Input Laporan Pengembalian</h1>
    <form action="pengembalian.php" method="POST">
        <label for="id_pemesanan">ID Pemesanan:</label>
        <select name="id_pemesanan" id="id_pemesanan" required>
            <?php
            // Query untuk mendapatkan daftar ID Pemesanan
            $query = "SELECT id_pemesanan FROM pemesanan";
            $result = mysqli_query($conn, $query);
            
            // Menampilkan pilihan ID Pemesanan
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['id_pemesanan'] . "'>" . $row['id_pemesanan'] . "</option>";
            }
            ?>
        </select><br><br>
        
        <label for="id_admin">ID Admin:</label>
        <select name="id_admin" id="id_admin" required>
            <?php
            
            $query = "SELECT id_admin FROM admin";
            $result = mysqli_query($conn, $query);
            
            // Menampilkan pilihan ID Admin
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['id_admin'] . "'>" . $row['id_admin'] . "</option>";
            }

            mysqli_close($conn);
            ?>
        </select><br><br>
        
        <label for="tgl_kembali">Tanggal Kembali:</label>
        <input type="date" name="tgl_kembali" id="tgl_kembali" required><br><br>
        
        <label for="kondisi_mobil">Kondisi Mobil:</label>
        <textarea name="kondisi_mobil" id="kondisi_mobil" required></textarea><br><br>
        
        <label for="denda">Denda:</label>
        <input type="number" name="denda" id="denda" required><br><br>
        
        <input type="submit" value="Simpan Laporan">
    </form>
</body>
</html>
