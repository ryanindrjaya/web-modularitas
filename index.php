<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Web Modularitas</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .card-img-top {
      width: 100%;
      height: 15vw;
      object-fit: cover;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <?php
  require(__DIR__ . '/komponen/nav-index.php');
  ?>

  <!-- Banner Image -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/home1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Boleh Nyicil Gak Pake DP</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/home2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Info Menarik Buat Kamu</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/home3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Gratis Cashback Tanpa Syarat</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/home4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Gratis Ongkir Nasional</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Content -->

  <div class="container">
    <div class="row d-flex flex-row justify-content-start mt-5">
      <h5>Paling laris!</h5>
      <?php
      $dir_gambar = './img-produk/';
      $dir_nama = './nama-produk/';
      $dir_harga = './harga-produk/';
      $file_gambar = array_slice(scandir($dir_gambar), 2);
      $file_nama = array_slice(scandir($dir_nama), 2);
      $file_harga = array_slice(scandir($dir_harga), 2);

      if (count($file_gambar) > 0) {
        for ($i = 0; $i < count($file_gambar); $i++) {
      ?>
          <div class="card produk-card shadow-sm col-lg-3 mx-2 my-3 p-0" style="width: 16rem;">
            <a href="#" style="color: black;">
              <img src="img-produk/<?php echo $file_gambar[$i]; ?>" class="card-img-top" alt="Gambar produk" style="max-width: 20rem;">
              <div class="card-body" style="padding: 5px;">
                <h6 class="card-title mt-2">
                  <?php
                  $data_nama = fopen('nama-produk/' . $file_nama[0], "r") or die("Tidak dapat memuat nama produk!");
                  echo fgets($data_nama);
                  fclose($data_nama);
                  ?>
                </h6>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item harga" style="color: #C70039; text-align: left;">
                  <?php
                  $data_harga = fopen('harga-produk/' . $file_harga[$i], "r") or die("Tidak dapat memuat harga produk!");
                  $formatHarga = intval(fgets($data_harga));
                  echo 'Rp. ' . number_format($formatHarga);
                  fclose($data_harga);
                  ?>
                </li>
              </ul>
            </a>
          </div>
        <?php
        }
      } else { ?>
        <p class="card text-dark text-center bg-light shadow p-3">Tidak ada produk</p>
      <?php } ?>
      <a href="product.php">
        <button class="btn btn-dark mt-4 mb-4">Semua Produk</button>
      </a>
    </div>
  </div>


  <?php
  require(__DIR__ . '/komponen/footer.php');
  ?>

  <!-- Bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>