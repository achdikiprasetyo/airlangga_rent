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
  .page-heading h1 {
    font-size: 40px;
    color: #ffffff;
    margin: 0 auto;
  }
  .page-heading h2, .page-heading h1 {
    font-size:40px;
    color: #ffffff;
    margin: 0 auto;
  }
  .coustom-breadcrumb {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
  }

  .coustom-breadcrumb li {
    display: inline-block;
    margin: 0 5px;
  }

  .coustom-breadcrumb li a {
    text-decoration: none;
    color: #fff !important;
    font-weight: bold;
  }

  .coustom-breadcrumb li a:hover {
    text-decoration: none;
    color: grey!important;
  }

  .coustom-breadcrumb li::after {
    display: inline-block;
    margin: 0 5px;
    color: #fff;
    font-size: 20px;
  }

  .coustom-breadcrumb li:last-child::after {
    content: none;
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
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .search-form button:hover {
    background-color: darkred; /* Mengubah warna latar belakang saat di-hover */
  }

  .btn-kembali {
    padding: 8px 16px;
    font-size: 16px;
    margin-bottom: 20px;
    margin-top: 140px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .btn-kembali:hover {
    background-color: darkred; /* Mengubah warna latar belakang saat di-hover */
  }

  .search-form h2 {
    color: black;
  }

  .car-image {
    margin-right: 20px;
  }

  .car-image img {
    width: 200px;
    height: 150px;
  }

  .car-container {
    background-color: #e5e5e5;
    padding: 20px;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
    cursor: pointer;
    display: flex;
    align-items: center;
    margin-left: 20px;
  }

  .car-image {
    margin-right: 0;
    margin-bottom: 10px;
  }


    .car-container:hover {
      transform: translateY(-5px);
    }

    .car-container h3 {
      font-size: 24px;
      color: #333;
      margin-bottom: 10px;
      margin-left: 20px;
    }

    .car-container p {
      font-size: 16px;
      color: #777;
      margin-bottom: 5px;
      margin-left: 20px;
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
      margin-left: 20px;
      margin-bottom: 20px;
    }

    .car-container a:hover {
      background-color: darkred;
    }
    .container{
      margin-bottom: 20px;
      padding: 10px 10px 10px 10px;
      margin-left: 20px;
      margin-right: 20px;
    }

    hr {
      border: none;
      height: 1px;
      background-color: transparent;
      margin-bottom: 0;
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
        <li><a href="../home/home.php" style="color: white;">Home</a></li>
        <li style="color: white;">></li>
        <li style="color: white;">Daftar Mobil</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>

<div class="container">
  <div class="search-form">
    <h2>Daftar Mobil</h2>
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
      $harga = $row["harga"];
      $tahun = $row["tahun"];
      $fotoMobil = $row["foto_mobil"];
  
      echo "<div class='car-container'>";
      echo "    <div class='car-image'>";
      echo "        <img src='$fotoMobil' alt='Foto Mobil' width='200' height='150'>";
      echo "    </div>";
      echo "    <div class='car-details'>";
      echo "        <h3>$merk</h3>";
      echo "        <p>Harga : Rp$harga / hari</p>";
      echo "        <p>Tahun : Rp$tahun</p>";
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
