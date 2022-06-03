<?php

if(isset($_POST['submit'])) {
  // Direktori untuk menyimpan file
  $namaProdukDir = 'nama-produk/';
  $fotoProdukDir = 'img-produk/';
  $hargaProdukDir = 'harga-produk/';
  
  // Membuat dan menulis file txt nama produk dan harga produk
  $fileNama = $namaProdukDir . str_replace(' ', '_', $_POST['namaProduk']) . ".txt";
  $fileHarga = $hargaProdukDir . 'harga' . str_replace(' ', '_', $_POST['namaProduk']) . ".txt";

  $openFileNama = fopen($fileNama, 'w') or die("File tidak bisa dibuka!");
  $openFileHarga = fopen($fileHarga, 'w') or die("File tidak bisa dibuka!");

  fputs($openFileNama, $_POST['namaProduk']);
  fputs($openFileHarga, $_POST['hargaProduk']);

  fclose(($openFileNama));
  fclose(($openFileHarga));

  // upload file image
  $uploadImg = $fotoProdukDir . $_FILES['fotoProduk']['name'];
  if (move_uploaded_file($_FILES['fotoProduk']['tmp_name'], $uploadImg)) {
    echo '<script>window.location = "product.php";</script>';
  } else {
    echo '<script>alert("Gagal menambahkan produk!");</script>';
  }
}
?>