
<?php include '../template/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Mobil Airlangga | Hubungi Kami</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

<style>
.page-header {
    background-image: url("hubungikami.jpg");
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

  /* Bagian Informasi Kontak */
  .container h2 {
    color: black;
    font-weight: bold;
  }
  .contact-info {
    margin-top: 100px;
    margin-bottom : 200px;
    display: flex;
    align-items: center;
  }
  .contact-info__item {
    display: flex;
    align-items: center;
    margin-right: 20px;
  }
  .contact-info__icon {
    font-size: 24px;
    margin-right: 10px;
    color: #888888;
  }
  .contact-info__text {
    color: #555555;
  }

  /* Efek Hover */
  .contact-info__item:hover .contact-info__icon,
  .contact-info__item:hover .contact-info__text {
    color: blue;
  }
</style>

</head>
<body>
<!-- Header Halaman -->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Hubungi Kami</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Hubungi Kami</li>
      </ul>
    </div>
  </div>
  <!-- Lapisan Gelap -->
  <div class="dark-overlay"></div>
</section>
<!-- /Header Halaman -->

<!-- Bagian Informasi Kontak -->
<section class="contact-info">
  <div class="container">
    <h2>Info Kontak</h2>
    <div class="contact-info__item">
      <i class="fas fa-phone contact-info__icon"></i>
      <p class="contact-info__text">+62858-5290-9079</p>
    </div>
    <div class="contact-info__item">
      <i class="fas fa-envelope contact-info__icon"></i>
      <p class="contact-info__text">rentalmobilairlangga@gmail.com</p>
    </div>
    <div class="contact-info__item">
      <i class="fas fa-map-marker-alt contact-info__icon"></i>
      <p class="contact-info__text">Rental Mobil Airlangga 
        Jl. Raya Semambung No. 19 RT. 4 RW.13 Kec. Wonoayu, Kota Sidoarjo 61261</p>
    </div>
  </div>
</section>
<!-- /Bagian Informasi Kontak -->

<!-- Tambahkan konten dan styling lainnya sesuai kebutuhan -->

</body>
</html>

<?php include '../template/footer.php'; ?>