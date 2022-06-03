<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    .card-img-top {
      width: 100%;
      height: 15vw;
      object-fit: cover;
    }
  </style>
  <title>Produk</title>
</head>

<body>
  <?php
  require(__DIR__ . '/komponen/nav.php');
  ?>

  <div class="container mt-5 mb-5">
    <?php
    require(__DIR__ . '/komponen/breadcrumb.php');
    ?>

    <!-- HEADING -->
    <div class="row">
      <div class="col-12">
        <h1 class="display-1">All Products</h1>
      </div>
    </div>

    <div class="row mt-5 gx-5">
      <!-- FILTER -->
      <div class="col-lg-3 filter">
        <form action="filter.php">
          <div class="filter-form">
            <small class="form-text d-block text-muted">Kategori</small>
            <select class="mt-2 dropdown" id="filter-kategori">
              <option value="handphone">Handphone</option>
              <option value="laptop">Laptop</option>
              <option value="aksesoris">Aksesoris</option>
              <option value="games">Games</option>
            </select>
          </div>
          <div class="filter-form mt-4">
            <small class="form-text d-block text-muted">Harga</small>
            <select class="mt-2 dropdown" id="filter-kategori">
              <option value="handphone">0 - IDR 100,000</option>
              <option value="laptop">IDR 100,000 - 1,000,000</option>
              <option value="aksesoris">> IDR 1,000,000</option>
            </select>
          </div>
        </form>
      </div>

      <!-- ITEM PRODUK -->
      <div class="col-lg-8">
        <div class="row d-flex flex-row justify-content-start">
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
                  <img src="img-produk/<?php echo $file_gambar[$i]; ?>" class="card-img-top" alt="Gambar produk">
                  <div class="card-body" style="padding: 5px;">
                    <h6 class="card-title mt-2">
                      <?php
                      $data_nama = fopen('nama-produk/' . $file_nama[$i], "r") or die("Tidak dapat memuat nama produk!");
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

        </div>
      </div>

    </div>

  </div>

  <?php
  require(__DIR__ . '/komponen/footer.php');
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>