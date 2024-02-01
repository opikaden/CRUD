<?php
require 'functions.php';
if( isset($_POST["submit"]) ) {
  
  // Untuk cek berhasil/tidak
  if( tambah1($_POST) > 0 ) {
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
  <legend align="center">Input Data Penerbit</legend>
  <center><h2>Tambah Data Penerbit</h2></center>

    <form action="" method="post">
      <ul style="list-style: none;">
        <li>
          <label for="id_penerbit">ID Penerbit : </label>
          <input type="text" name="id_penerbit" required autocomplete="off">
        </li><br>
        <li>
          <label for="nama">Nama : </label>
          <input type="text" name="nama" required autocomplete="off">
        </li><br>
        <li>
          <label for="alamat">Alamat : </label>
          <input type="text" name="alamat" required autocomplete="off">
        </li><br>
        <li>
          <label for="kota">Kota : </label>
          <input type="text" name="kota" required autocomplete="off">
        </li><br>
        <li>
          <label for="telepon">Telepon : </label>
          <input type="text" name="telepon" required autocomplete="off">
        </li><br>
        <li>
          <button type="submit" name="submit">Tambah</button>
        </li>
      </ul>

  </fieldset>
</body>
</html>