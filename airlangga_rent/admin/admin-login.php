<?php 

# connect
include "../koneksi.php";

# sesi php
session_start();
# menonaktifkan laporan kesalahan php
error_reporting(0);

# memeriksa apakah sudah memiliki sesi yang aktif dengan nama. Jika iya, akan diarahkan ke halaman index.php menggunakan fungsi header().
// if (isset($_SESSION['nama'])) {
//     header("Location: ../mobil/daftar_mobil.php");
//     exit();
// }
// else {
//     header("Location: salah.php");
// }

# eksekusi ketika tombol submit diklik maka perintah akan dieksekusi
if (isset($_POST['submit'])) {
    # mengambil nilai input nama
    $nama = $_POST['nama'];
    # mengambil nilai input password dan disimpan pada variabel password
    $password = md5($_POST['password']);
    
    # sql mennyimpan data ke table users
    $sql = "SELECT * FROM admin WHERE nama='$nama' AND password='$password'";
    # eksekusi sql
    $result = mysqli_query($conn, $sql);
    # memeriksa nama dan pasword cocok dengan yang didaftarkan pada sql
    if ($result->num_rows > 0) {
        # mengambil baris pertama dari data
        $row = mysqli_fetch_assoc($result);
        #menyimpam nama pada nama
        $_SESSION['nama'] = $row['nama'];
        header("location: index.php");
    } else {
        echo "<script> alert('Wooops! nama atau password anda salah')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <style>
        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }
    body {
      min-height: 100vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(bg.jpg);
      background-position: center;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .container {
      background-color: #D9D9D9;
      width: 400px;
      padding: 2%;
      border-radius: 10px;
    }
    .container h1 {
      text-align: center;
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 20px;
    }
    .input {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .input p {
      flex-basis: 120px;
      font-weight: 600;
      margin-right: 10px;
    }
    .input i {
      color: #000000;
      margin-right: 10px;
    }
    .input input {
      flex-grow: 1;
      padding: 8px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
    }
    .btn {
      background: #FF0012;
      color: #fff;
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      width: 100%;
      font-weight: 700;
      font-size: 16px;
      line-height: 19px;
      text-align: center;
      cursor: pointer;
    }
    .reg {
      text-align: center;
      margin-top: 20px;
    }
    .reg a {
      color: #FF0012;
      text-decoration: none;
      font-weight: 600;
    }
    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #000000;
        text-decoration: none;
        font-size: 20px;
        line-height: 1;
    }
    .close-button:hover {
        color: #FF0012;
    }

    </style>
</head>
<body style="background-image: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)), url(bg.jpg)">
    <div class="container">
        <form action="" method="POST" class="login-nama">
        <a href="index.php" class="close-button"><i class="fas fa-times"></i></a>
        <h1 style="font-size: 2rem; font-weight:850px;">Login Admin</h1>
        <br>
        <div class="input">
            <p>nama</p>
            <td><i class="fa-solid fa-user" style="color: #000000;"></i></td>
            <td><input type="nama" placeholder="nama" name="nama" value="<?php echo $nama;?>"required></td>
        </div>
        <br>
        <div class="input">
            <p>Password</p>
            <td><i class="fa-solid fa-key" style="color: #000000;"></i></td>
            <td><input type="password" placeholder="Password" name="password" value="<?php echo $_POST['$password'];?>"required></td>
        </div>
        <br>
        <div class="input"><button name="submit" class="btn">Login</button></div>
        <p class="reg">Tidak memiliki akun admin ?
            <a href="admin-register.php">Register</a>
        </p>
        </form>
        </div>
</body>
</html>