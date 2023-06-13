<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Final Project | Rental Mobil Airlangga</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <style>
    html, body {
      height: 100vh;
      width: 100vw;
      margin: 0;
      padding: 0;
    }

    .logoHeader {
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

    .login a {
      text-decoration: none;
      color: #FFFFFF;
    }

    .navHeader {
      height: 50px;
      width: 100%;
      background-color: black;
      display: flex;
      flex-direction: row;
      padding: 5px 0px;
      align-items: center;
    }

    .navHeader li {
      list-style-type: none;
      padding: 5px;
    }

    .navHeader li a {
      color: #FFFFFF;
      padding-inline-start: 30px;
      text-decoration: none;
      font-family: inter;
    }

    .navHeader li a:hover {
      color: #FF0012;
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

    .social-follow {
      display: inline-block;
      margin-left: 400px;
      margin-top: 0;
      vertical-align: middle;
      position: absolute;
      padding-left: 600px;
    }

    .social-follow ul {
      padding: 0px;
      margin: 0px;
    }

    .social-follow ul li {
      display: inline-block;
      vertical-align: middle;
      list-style: none;
      margin: 0px;
    }

    .social-follow ul li a {
      display: block;
      font-size: 25px;
      color: #555;
      transition: color 0.3s ease;
    }

    .social-follow ul li a:hover {
      color: #FF0012;
    }

    .social-follow li i {
      margin-right: 5px;
    }

    .login-register-button {
      
      background-color: #FF0000;
      color: #fff;
      border-radius: 10px;
      padding: 10px 20px;
      width: 171px;
      text-align: center;
      font-size: 16px;
      margin-left: 10px;
      margin-right: 12px;
      text-decoration: none;
    }
    .login-register-button:hover {
      background-color: darkred;
    }
  </style>
</head>
<body>
  <!-- bagian awal : logo dan medsos -->
  <header class="header">
    <div class="logoHeader">
      <img src="../template/oke_logo.png" alt="Foto Logo">
    </div>
    <div class="social-follow">
      <ul>
        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    
    <?php if(isset($_SESSION['username'])) { ?>
      <a class="login-register-button" href="../login/logout.php">LOGOUT</a>
    <?php } else { ?>
      <a class="login-register-button" href="../login/login.php">LOGIN / REGISTER</a>
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
