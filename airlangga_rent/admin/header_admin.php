<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Rental Mobil Airlangga</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <style>
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
      padding: 5px;
      align-items: center;
      font-family: sans-serif;
      font-weight: bold;
    }

    .navHeader li {
      list-style-type: none;
      padding: 5px;
    }

    .navHeader li a {
      color: #FFFFFF;
      padding-inline-start: 30px;
      text-decoration: none;
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
  <!-- bagian navbar -->
  <div class="navHeader">
  <li><a href="admin_add_mobil.php">Tambah Mobil</a></li>
  <li><a href="view_edit.php">Daftar Mobil</a></li>
  <li><a href="daftar_pemesanan.php">Daftar Pemesanan</a></li>
  <li><a href="view_pengembalian.php">Input Pengembalian</a></li>
  <li><a href="pengembalian.php">Laporan Pengembalian</a></li>
</div>
</body>
</html>
