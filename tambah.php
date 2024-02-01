<?php
require 'functions.php';
if( isset($_POST["submit"]) ) {
  
  // Untuk cek berhasil/tidak
  if( tambah($_POST) > 0 ) {
    echo "
          <script>
            alert('Berhasil!');
          </script>
          ";
  }
  else {
    echo "
          <script>
            alert('Gagal!');
          </script>
          ";
  }

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Toko Buku Berbasis Web</title>
  <style>
    fieldset {
      width: 400px;
      margin: auto;

    }
  </style>
</head>
<body>
  <fieldset>
  <legend align="center">Input Data Buku</legend>
  <center><h2>Tambah Data Buku</h2></center>

    <form action="" method="post">
      <ul style="list-style: none;">
        <li>
          <label for="id_buku">ID Buku : </label>
          <input type="text" name="id_buku" required autocomplete="off">
        </li><br>
        <li>
          <label for="kategori">Kategori : </label>
          <input type="text" name="kategori" required autocomplete="off">
        </li><br>
        <li>
          <label for="nama_buku">Nama Buku : </label>
          <input type="text" name="nama_buku" required autocomplete="off">
        </li><br>
        <li>
          <label for="harga">Harga : </label>
          <input type="text" name="harga" required autocomplete="off">
        </li><br>
        <li>
          <label for="stok">Stok : </label>
          <input type="text" name="stok" required autocomplete="off">
        </li><br>
        <li>
          <label for="penerbit">Penerbit : </label>
          <input type="text" name="penerbit" required autocomplete="off">
        </li><br>
        <li>
          <button type="submit" name="submit">Tambah</button>
        </li>
      </ul>

  </fieldset>
</body>
</html>