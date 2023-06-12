<?php include '../template/header.php'; ?>


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
    color: white;
    font-size: 20px;
    margin-top: 5px;
  }

  .image-content {
    color: #fff;
    font-size: 24px;
    padding: 20px;
    top : 50%;
    left: 5%;
    position: absolute;
    font-family: Arial, sans-serif;
    opacity: 0; 
    animation: fade-in 1s forwards; 
  }
  .image-content h2 {
    margin-bottom: 5px; 
  }
  @keyframes fade-in {
    from {
      opacity: 0; /* Start with opacity 0 */
    }
    to {
      opacity: 1; /* End with opacity 1 */
    }
  }
  
  .home-button {
    background-color:  #FF0000;
    color: #fff;
    border-radius: 10px;
    padding: 10px 20px; 
    width: fit-content; 
    text-align: center;
    font-size: 16px;
    margin-left: 0px;
    font-family: Arial, sans-serif;
    font-weight: bold;
    transition: background-color 0.3s ease; 
    text-decoration: none;
    display: inline-block;

  }

  .home-button:hover {
    background-color: #990000;
    cursor: pointer; 
  }

  .home-button::after {
    content: "\f105"; 
    font-family: "Font Awesome 5 Free"; 
    margin-left: 5px;
    font-weight: bold;
    font-size: 18px; 
  }
</style>

<div class="background-image">
  <div class="image-content">
    <h2>CARI MOBIL UNTUK<br> KENYAMANAN ANDA ?</h1>
    <p>Kami punya beberapa pilihan untuk anda</p>
    <a class="home-button" href="../mobil/daftar_mobil.php">SELENGKAPNYA</a>
  </div>
</div>


</body>
<?php include '../template/footer.php'; ?>
</html>