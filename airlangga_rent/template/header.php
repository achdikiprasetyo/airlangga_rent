<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FINAL PROJECT</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <style>
      html, body {
      height: 100vh;
      width: 100vw;
      margin: 0;
      padding: 0;
    }


  .logoHeader{
      align-items: center;
      padding-right: 250px;
  }

    .login {
      width: 150px;
      height: 45px;
      background: #FF0012;
      border-radius: 10px;
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-size: 20px;
      line-height: 24px;
      color: #FFFFFF;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login a{
      text-decoration: none;
      color: #FFFFFF;
    }

    .navHeader{
      height: 50px;
      width: 100%;
      background-color: black;
      display: flex;
      flex-direction: row;
      padding: 5px;
      align-items: center;
    }

    .navHeader li{
      list-style-type: none;
      padding:5px;
    }

    .navHeader li a{
      color: #FFFFFF;
      padding-inline-start: 30px;
      text-decoration: none;
      font-family: inter;
    }
    .header {
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 10px;
          background-color: #f2f2f2;   
    }
    .logoHeader img {
          width: 120px;
          height: 56px;
      }
      .social-links {
          display: flex;
          gap: 10px;
          margin-left: auto;
    }
      

  .login-register-button {
          background-color:  #FF0000;
          color: #fff;
          border-radius: 10px;
          padding: 10px 20px;
          width: 171px;
          text-align: center;
          font-size: 16px;
          margin-left: 10px;
          margin-right: 12px;
      }
    </style>
</head>
<body>
  <!-- bagian awal : logo dan medsos -->
    <header class="header">
        <div class="logoHeader">
            <img src="../template/oke_logo.png" alt="Foto Logo">
        </div>
        <div class="social-links">
            <a href=""><i class="fa-brands fa-facebook" style="color: #000000; font-size: 30px;"></i></a>
            <a href=""><i class="fa-brands fa-square-instagram" style="color: #000000; font-size: 30px;"></i></a>
            <a href=""><i class="fa-brands fa-square-twitter" style="color: #000000; font-size: 30px;"></i></a>
            <a href=""><i class="fa-brands fa-linkedin" style="color: #000000; font-size: 30px;"></i></a>
        </div>
        <?php session_start(); ?>
        <?php if(isset($_SESSION['username'])) { ?>
            <a class="login-register-button" href="../login/logout.php">LOGOUT</a>
        <?php } else { ?>
            <a class="login-register-button" href="../login/login.php">LOGIN</a>
        <?php } ?>
    </header>
  <!-- bagian navbar -->
    <div class="navHeader">
        <li><a href="../home/home.php">HOME</a></li>
        <li><a href="../home/tentang_kami.php">TENTANG KAMI</a></li>
        <li><a href="../mobil/daftar_mobil.php">DAFTAR MOBIL</a></li>
        <li><a href="../home/hubungi_kami.php">HUBUNGI KAMI</a></li>
    </div>
</body>
</html>
