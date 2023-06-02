<?php include 'bootstrap.php'; ?>
<?php include 'header.php'; ?>


<style>
  .background-image {
    background-image: url('bgHome.jpg');
    background-repeat: no-repeat;
    background-position:right;
    background-size: cover;
    min-height: 800px;
    justify-content: flex-end;
    align-items: center;
  }


  p{
    color: wheat;
    text-size-adjust: 100px;
    
  }

  .image-content {
    color: #fff;
    font-size: 24px;
    padding: 20px;
    top : 50%;
    left: 5%;
    position: absolute;
  }
  h1{
    font-weight: bold;
  }
  .home-button {
    background-color:  #FF0000;
    color: #fff;
    border-radius: 10px;
    padding: 10px 65px;
    width: 200px;
    text-align: center;
    font-size: 16px;
    margin-left: 20px;
  }
</style>

<div class="background-image">
  <div class="image-content">
    <h1>CARI MOBIL UNTUK<br> KENYAMANAN ANDA ?</h1>
    <p>Kami punya beberapa <br>pilihan untuk anda</p>
    <a class="home-button" href="daftar_mobil.php">SELENGKAPNYA ></a>
  </div>
</div>


</body>
<?php include 'footer.php'; ?>
</html>