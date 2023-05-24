<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil Airlangga</title>
    <style>
      a.nav-link-custom {
          font-family: 'Inter';
          font-weight: bold;
          font-size: 18px;

      }
      .header {
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 10px;
          background-color: #f2f2f2;   
      }
        
      .nav-item.active {
        color: green;
      }
      .logo {
          width: 100px;
          height: 56px;
      }

      .logo img {
          width: 120px;
          height: 56px;
      }

      .social-links {
          display: flex;
          gap: 10px;
          margin-left: 1000px;
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
      }
    </style>
</head>
<?php include 'bootstrap.php'; ?>
<body>
    <header class="header">
        <div class="logo">
            <img src="logo_fix.png" alt="Logo">
        </div>
        <div class="social-links">
            <a class="social-link" href="https://www.instagram.com">Instagram</a>
            <a class="social-link" href="https://www.facebook.com">Facebook</a>
            <a class="social-link" href="https://www.youtube.com">YouTube</a>
        </div>
        <a class="login-register-button" href="#">LOGIN</a>
    </header>


<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #000000">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo ($page == 'index.php') ? 'active' : ''; ?>">
        <a class="nav-link nav-link-custom" href="index.php">HOME</a>
      </li>
      <li class="nav-item <?php echo ($page == 'tentang_kami.php') ? 'active' : ''; ?>">
        <a class="nav-link nav-link-custom" href="tentang_kami.php">TENTANG KAMI</a>
      </li>
      <li class="nav-item <?php echo ($page == 'daftar_mobil.php') ? 'active' : ''; ?>">
        <a class="nav-link nav-link-custom" href="daftar_mobil.php">DAFTAR MOBIL</a>
      </li>
      <li class="nav-item <?php echo ($page == 'hubungi_kami.php') ? 'active' : ''; ?>">
        <a class="nav-link nav-link-custom" href="hubungi_kami.php">HUBUNGI KAMI</a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
