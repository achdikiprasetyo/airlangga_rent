<?php
# connect
include '../koneksi.php';

# sesi php
session_start();
# menonaktifkan laporan kesalahan php
error_reporting(0);

# memeriksa apakah sudah memiliki sesi yang aktif dengan nama. Jika iya, akan diarahkan ke halaman welcome.php menggunakan fungsi header().
if (isset($_SESSION['nama'])) {
    header("Location: login.php");
}

# eksekusi ketika tombol submit diklik maka perintah akan dieksekusi
if (isset($_POST['submit'])) {
    # mengambil nilai input nama
	$nama = $_POST['nama'];
    # mengambil nilai input email
	$email = $_POST['email'];
    # mengambil nilai input password
	$password = md5($_POST['password']);
    # mengambil nilai input cppassword
	$cppassword = md5($_POST["cppassword"]);

    # memeriksa apakah password dan konfirmasi password sesuai. Jika iya, kode di dalamnya akan dieksekusi.
	if ($password === $cppassword) {
        # ini adalah pernyataan SQL untuk memeriksa apakah email yang diberikan oleh pengguna sudah ada dalam tabel "users".
		$sql = "SELECT * FROM admin WHERE email='$email'";
        # eksekusi sql
		$result = mysqli_query($conn, $sql);
        # periksa query satu baris data
		if (!$result->num_rows > 0) {
            # add data pada sql
			$sql = "INSERT INTO admin (nama, email, password)
					VALUES ('$nama', '$email', '$password')";
            # persiapan bisa atau tidak masuknya pada sql
			$result = mysqli_query($conn, $sql);
			if ($result) {
                $id = mysqli_insert_id($conn);
				echo "<script>alert('Registrasi Berhasil.')</script>";
                header("Location: admin-login.php");
                # reset
				
			} else {
                # add data tidak berhasil
				echo "<script>alert('Ada yang salah !')</script>";
                echo "Error: " . mysqli_error($conn);
			}
		} else {
			echo "<script>alert('Email telah terdaftar')</script>";
		}

	} else {
		echo "<script>alert('Password tidak sinkron')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        body {
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(bgg.jpg);
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
<body style="background-image: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)), url(bgg.jpg)">
    <div class="container">
        <form action="" method="POST" class="login-email">
            <a href="../home/home.php" class="close-button"><i class="fas fa-times"></i></a>
            <h1 style="font-size: 2rem; font-weight:850px;">Register ADMIN</h1>
            <br>
            <div class="input">
                <p>nama</p>
                <i class="fa-solid fa-user" style="color: #000000;"></i>
                <input type="text" placeholder="nama" name="nama" value="<?php echo $nama; ?>">
            </div>
            <br>
            <div class="input">
                <p>Email</p>
                <i class="fa-solid fa-envelope" style="color: #000000;"></i>
                <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>">
            </div>
            
            <br>
            <div class="input">
                <p>Password</p>
                <i class="fa-solid fa-key" style="color: #000000;"></i>
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST["password"]; ?>" required>
            </div>
            <br>
            <div class="input">
                <p>Confirm password</p>
                <i class="fa-solid fa-key" style="color: #000000;"></i>
                <input type="password" placeholder="Confirm Password" name="cppassword" value="<?php echo $_POST["cppassword"]; ?>" required>
            </div>
            <br>
            <div class="input"><button name="submit" class="btn">Register</button></div>
            <p class="reg">Sudah memiliki akun dengan akses Admin ?
            <a href="admin-login.php">Login</a>
        </p>
        </form>
    </div>
</body>
</html>