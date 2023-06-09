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
    echo "Mobil baru berhasil ditambahkan.";
} else {
    echo "Error: " . $sqlInsertCar . "<br>" . $conn->error;
}

$conn->close();
?>
