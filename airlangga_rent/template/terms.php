<?php include '../template/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Airlangga | Term of Use</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  
<style>
.page-header {
    background-image: url("vw.jpg");
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

.about-us {
    padding: 60px 0;
    background-color: #ffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: left;
    margin-left: 70px;
    margin-right: 70px;
    opacity: 0; /* Initially hidden */
    animation: fadeIn 1s ease-in-out forwards;
}

@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px);
        }
    100% {
            opacity: 1;
            transform: translateY(0);
        }
}

.about-us .row {
    justify-content: center;
}

.about-us h2 {
    font-size: 30px;
    font-weight: bold;
    color: black;
    margin-bottom: 20px;
    text-align: center;
}

.about-us p {
    font-size: 16px;
    line-height: 1.8;
    color: black;
    text-align: justify; 
    margin-left: 0;
    margin-right: 0;
}

.about-us ul {
    list-style-type: none;
}

.about-us ul li::before {
    content: none;
}

</style>

</head>
<body>
<section class="page-header contactus_page">
    <div class="container">
        <div class="page-header_wrap">
            <div class="page-heading">
                <h1>Term of Use</h1>
            </div>
            <ul class="coustom-breadcrumb">
              <li><a href="../home/home.php" style="color: white;">Home</a></li>
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
                <h2>Syarat Penggunaan</h2>
                <p>
                    Syarat Penggunaan Aplikasi Rental Mobil Airlangga
                </p>
                <table>
                    <tr>
                        <td>
                            <p>
                                Selamat datang di Aplikasi Rental Mobil kami. Silakan baca dengan seksama syarat-syarat penggunaan di bawah ini sebelum menggunakan aplikasi ini. Dengan mengakses dan menggunakan aplikasi ini, Anda setuju untuk terikat oleh syarat-syarat berikut:
                            </p>
                            <ul>
                                <li>1. Pastikan anda mencapai usia hukum sebelum menggunakan aplikasi ini. Jika belum, gunakan aplikasi ini dibawah pengawasan orang dewasa</li>
                                <li>2. Aplikasi ini hanya boleh digunakan untuk tujuan yang sah, seperti reservasi dan pemesanan mobil sewaan</li>
                                <li>3. Jangan lakukan tindakan yang merusak atau mengganggu operasi aplikasi ini</li>
                                <li>4. Kami berhak untuk memblokir atau menghapus akses anda jika melanggar syarat dan ketentuan ini</li>
                                <li>5. Tautan ke situs web pihak ketiga adalah tanggung jawab anda sendiri</li>
                                <li>6. Hak cipta dan hak kekayaan intelektual dalam aplikasi ini dilindungi</li>
                                <li>7. Kami dapat memperbarui atau menghentikan aplikasi ini tanpa pemberitahuan sebelumnya</li>
                                <li>8. Kami tidak bertanggung jawab atas kesalahan atau kerugian yang timbul dari penggunaan aplikasi ini</li>
                                <li>9. Syarat penggunaan ini tunduk pada hukum yang berlaku di negara kami</li>
                                <li>10. Berikan informasi pribadi yang akurat dan terkini saat mendaftar atau menggunakan aplikasi</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <p>
                    Dengan menggunakan aplikasi ini, Anda setuju untuk mematuhi syarat-syarat penggunaan yang telah ditetapkan. Harap diingat bahwa penggunaan aplikasi ini merupakan tanggung jawab Anda sendiri, dan kami tidak bertanggung jawab atas konsekuensi atau kerugian yang mungkin timbul akibat penggunaan aplikasi ini.
                </p>
                <p>
                    Kami berharap Anda dapat memanfaatkan aplikasi rental mobil kami dengan baik dan mendapatkan pengalaman yang menyenangkan. Jika Anda memiliki pertanyaan atau memerlukan bantuan lebih lanjut, jangan ragu untuk menghubungi tim dukungan kami.
                </p>
                <p>
                    Terima kasih telah menggunakan aplikasi rental mobil kami!
                </p>
            </div>
        </div>
    </div>
</section>

<?php include '../template/footer.php'; ?>
