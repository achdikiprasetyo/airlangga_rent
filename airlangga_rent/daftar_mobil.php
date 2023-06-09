<?php include 'bootstrap.php'; ?>
<?php include 'header.php'; ?>
<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>

</head>
<body>
    <h2>List Mobil</h2>

    <?php
    $sql = "SELECT * FROM mobil";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $idMobil = $row["id_mobil"];
            $merk = $row["merk"];
            $noPlat = $row["no_plat"];
            $stok = $row["stok"];

            echo "<div class='car-container'>";
            echo "    <h3>$merk</h3>";
            echo "    <p>No. Plat: $noPlat</p>";
            echo "    <p>Stok: $stok</p>";
            echo "    <a href='detail_mobil.php?id_mobil=$idMobil'>Detail</a>";
            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "Tidak ada data mobil.";
    }

    $conn->close();
    ?>
</body>
</html>
