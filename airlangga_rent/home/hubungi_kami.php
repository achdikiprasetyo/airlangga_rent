
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


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

  /* Bagian Informasi Kontak */
  .container h2 {
    color: black;
    font-weight: bold;
  }
  .contact-info {
    margin-left: 50px;
    margin-top: 50px;
    margin-bottom : 100px;
    display: flex;
    align-items: center;
  }
  .contact-info__item {
    display: flex;
    align-items: center;
    margin-right: 20px;
  }

  @keyframes fadeInLeft {
    from {
      opacity: 0;
      transform: translateX(-10px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .contact-info__item {
    animation: fadeInLeft 0.5s ease-in-out;
  }
  
  .contact-info__icon {
    font-size: 24px;
    margin-right: 10px;
    color: #888888;
  }
  .contact-info__text {
    color: #555555;
  }
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
        <li><a href="../home/home.php" style="color: white;">Home</a></li>
        <li style="color: white;">></li>
        <li style="color: white;">Hubungi Kami</li>
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