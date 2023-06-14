<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .success-message {
            text-align: center;
            margin-bottom: 10px;
            color: #007bff;
            font-weight: bold;
        }

        .error-message {
            text-align: center;
            margin-bottom: 10px;
            color: #dc3545;
            font-weight: bold;
        }
    </style>
    <?php
    // Menonaktifkan sementara konstrain foreign key
    $query_disable_fk = "SET FOREIGN_KEY_CHECKS=0";
    mysqli_query($conn, $query_disable_fk);

    // Mengambil ID mobil yang akan dihapus dari parameter URL
    $idMobil = $_GET['id'];

    // Menghapus data mobil dari database berdasarkan ID
    $query = "DELETE FROM mobil WHERE id_mobil = '$idMobil'";
    $result = mysqli_query($conn, $query);

    // Memeriksa apakah penghapusan berhasil
    if ($result) {
        $message = "Data mobil berhasil dihapus.";
        $messageClass = "success-message";
    } else {
        $message = "Terjadi kesalahan saat menghapus data mobil.";
        $messageClass = "error-message";
    }

    // Mengaktifkan kembali konstrain foreign key
    $query_enable_fk = "SET FOREIGN_KEY_CHECKS=1";
    mysqli_query($conn, $query_enable_fk);

    // Menutup koneksi ke database
    mysqli_close($conn);
    ?>
    <script>
        setTimeout(function() {
            window.location.href = "view_edit.php";
        }, 3000); // Redireksi setelah 3 detik
    </script>
</head>
<body>
    <div class="container">
        <h1>Hapus Mobil</h1>
        <div class="<?php echo $messageClass; ?>"><?php echo $message; ?></div>
    </div>
</body>
</html>
