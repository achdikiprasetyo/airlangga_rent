<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'rental_mobil_airlangga';

    $conn = mysqli_connect($host, $user, $password, $database);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
?>
