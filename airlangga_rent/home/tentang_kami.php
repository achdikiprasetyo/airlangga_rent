<?php include '../template/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Airlangga | Tentang Kami</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  
<style>
.page-header {
    background-image: url("bg.jpg");
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

  .about-us {
  padding: 60px 0;
  background-color: #f8f8f8;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.about-us .row {
  justify-content: center;
}

.about-us h2 {
  font-size: 30px;
  font-weight: bold;
  color: #333;
  margin-bottom: 20px;
  text-align: center;
}

.about-us p {
  font-size: 16px;
  line-height: 1.8;
  color: #777;
  text-align: center;
}

.about-us:hover {
  background-color: #e2e2e2;
}

.about-us:hover h2 {
  color: black;
}

.about-us:hover p {
  color: black;
}

</style>

</head>
<body>
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Tentang Kami</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Tentang Kami</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>

<section class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Tentang Kami</h2>
        <p>Dalam rangka menjawab kebutuhan pasar yang semakin tinggi terhadap layanan rentalmobil yang mudah, cepat, dan aman, PT Airlangga selaku perusahaan rental mobil terkemuka memperkenalkan aplik
asi rental mobil "Airlangga" berbasis website. Aplikasi ini dirancang untuk memudahkan pengguna dalam memesan mobil secara online dengan harga yang terjangkau. Aplikasi ini juga dilengkapi dengan berbagai fitur  canggih seperti pemilihan mobil yang sesuai dengan kebutuhan pengguna, pemilihan lokasi penjemputan, dan sistem pembayaran yang aman dan terpercaya.</p>
      </div>
    </div>
  </div>
</section>
<?php include '../template/footer.php'; ?>