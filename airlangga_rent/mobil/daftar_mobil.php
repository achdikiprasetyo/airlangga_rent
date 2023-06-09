<?php ob_start(); ?>
<?php include '../template/header.php'; ?>

<?php include '../koneksi.php'; 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Airlangga | Daftar Mobil</title>
    <!-- <link rel="stylesheet" href="daftar_mobil.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  

<style>
    .car-container {
  display: block;
  margin-bottom: 20px;
  transition: transform 0.3s ease;
  cursor: pointer;
}

.car-image {
  margin-right: 0;
  margin-bottom: 10px;
}

.page-header {
    background-image: url("daftarmobil.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    border: 0 none;
    margin: 0 auto;
    padding: 0;
    position: relative;
  }
  .page-header_wrap {
    padding:60px 0;
    position:relative;	
    text-align:center;
  }
  .page-heading {
    z-index:1;
    position:relative;
  }
  .page-heading h2, .page-heading h1 {
    font-size:40px;
    color: #ffffff;
    margin: 0 auto;
  }

  .search-form {
    margin-top:20px;
    margin-bottom: 20px;
  }

  .search-form input[type="text"] {
    width: 300px;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }

  .search-form button {
    padding: 8px 16px;
    font-size: 16px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .btn-kembali{
    padding: 8px 16px;
    font-size: 16px;
    margin-bottom: 20px;
    margin-top: 140 px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer; 
  }

  .car-container {
    background-color: #f8f8f8;
    padding: 20px;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
    cursor: pointer;
    display: flex;
    align-items: center;
  }

.car-image {
  margin-right: 20px;
}

.car-image img {
  width: 200px;
  height: 150px;
}

  .car-container:hover {
    transform: translateY(-5px);
  }

  .car-container h3 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
  }

  .car-container p {
    font-size: 16px;
    color: #777;
    margin-bottom: 5px;
  }

  .car-container a {
    display: inline-block;
    background-color: red;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 16px;
    font-size: 16px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .car-container a:hover {
    background-color: darkred;
  }
  .container{
    margin-bottom: 20px;
    padding: 10px 10px 10px 10px;
  }
  
</style>

</head>
<body>
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Daftar Mobil</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Daftar Mobil</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>

<div class="container">
  <div class="search-form">
    <form action="#" method="GET">
        <input type="text" name="keyword" placeholder="Cari mobil...">
        <button type="submit">Cari</button>
    </form>
  </div>

  <?php
  $keyword = $_GET['keyword'] ?? '';

  $sql = "SELECT * FROM mobil WHERE merk LIKE '%$keyword%'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $idMobil = $row["id_mobil"];
      $merk = $row["merk"];
      $noPlat = $row["no_plat"];
      $stok = $row["stok"];
      $fotoMobil = $row["foto_mobil"];
  
      echo "<div class='car-container'>";
      echo "    <div class='car-image'>";
      echo "        <img src='$fotoMobil' alt='Foto Mobil' width='200' height='150'>";
      echo "    </div>";
      echo "    <div class='car-details'>";
      echo "        <h3>$merk</h3>";
      echo "        <p>No. Plat: $noPlat</p>";
      echo "        <p>Stok: $stok</p>";
      echo "        <a href='detail_mobil.php?id_mobil=$idMobil'>Detail</a>";
      echo "    </div>";
      echo "</div>";
      echo "<hr>";
    }
  } else {
    echo "Tidak ada mobil yang ditemukan.";
  }

  $conn->close();
  ?>

  <a href="daftar_mobil.php"  class="btn-kembali">Kembali</a>
</div>

<?php include '../template/footer.php'; ?>

