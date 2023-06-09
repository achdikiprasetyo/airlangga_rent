<?php 

# connect
include "../koneksi.php";

# sesi php
session_start();
# menonaktifkan laporan kesalahan php
error_reporting(0);

# memeriksa apakah sudah memiliki sesi yang aktif dengan username. Jika iya, akan diarahkan ke halaman index.php menggunakan fungsi header().
if (isset($_SESSION['username'])) {
    header("Location: ../mobil/daftar_mobil.php");
    exit();
}
// else {
//     header("Location: salah.php");
// }

# eksekusi ketika tombol submit diklik maka perintah akan dieksekusi
if (isset($_POST['submit'])) {
    # mengambil nilai input email
    $email = $_POST['email'];
    # mengambil nilai input password dan disimpan pada variabel password
    $password = md5($_POST['password']);
    
    # sql mennyimpan data ke table users
    $sql = "SELECT * FROM akun_user WHERE email='$email' AND password='$password'";
    # eksekusi sql
    $result = mysqli_query($conn, $sql);
    # memeriksa email dan pasword cocok dengan yang didaftarkan pada sql
    if ($result->num_rows > 0) {
        # mengambil baris pertama dari data
        $row = mysqli_fetch_assoc($result);
        #menyimpam username pada username
        $_SESSION['username'] = $row['username'];
        header("location: ../index.php");
    } else {
        echo "<script> alert('Wooops! Email atau password anda salah')</script>";
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: inter;
}
 body{
  min-height: 100vh;
  background-position: center;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
 }

.container{
  background-color: #D9D9D9;
  width: auto;
  height: auto;
  padding: 2%;
}

.container h1{
text-align: center;
}

.input td{
  padding-bottom: 100px;
}

.btn{
  background: #FF0012;
  border-radius: 10px;
  height: auto;
  width: 300px;
  font-family: 'Inter';
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 19px;
  align-items: center;
  text-align: center;
}

.reg{
  padding-top: 20px;
}
    </style>
</head>
<body style="background-image: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)), url(bg.jpg)">
    <div class="container">
        <form action="" method="POST" class="login-email">
        <h1 style="font-size: 2rem; font-weight:850px;">Login</h1>
        <br>
        <div class="input">
            <p>Username</p>
            <td><i class="fa-solid fa-user" style="color: #000000;"></i></td>
            <td><input type="email" placeholder="Email" name="email" value="<?php echo $email;?>"required></td>
        </div>
        <br>
        <div class="input">
            <p>Password</p>
            <td><i class="fa-solid fa-key" style="color: #000000;"></i></td>
            <td><input type="password" placeholder="Password" name="password" value="<?php echo $_POST['$password'];?>"required></td>
        </div>
        <br>
        <div class="input"><button name="submit" class="btn">Login</button></div>
        <p class="reg">Doesn't have an Account ?
            <a href="register.php">Register</a>
        </p>
        </form>
        </div>
</body>
</html>