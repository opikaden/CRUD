<?php
require 'functions.php';

// Ambil data dari URL
$id_penerbit = $_GET["id_penerbit"];

// Query data dari id
$penerbit = query("SELECT * FROM tabel_penerbit WHERE id_penerbit = '$id_penerbit'")[0];


if( isset($_POST["submit"]) ) {
  
  // Untuk cek berhasil/tidak
  if( edit1($_POST) > 0 ) {
    echo "
          <script>
            alert('Berhasil!');
            window.location.href = 'pengadaan.php';
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
  <center><h2>Edit Data Penerbit</h2></center>

    <form action="" method="post">
      <input type="hidden" name="id_penerbit" value="<?= $penerbit["id_penerbit"]; ?>">
      <ul style="list-style: none;">
        <li>
          <label for="nama">Nama : </label>
          <input type="text" name="nama" required value="<?= $penerbit["nama"]; ?>" autocomplete="off">
        </li><br>
        <li>
          <label for="alamat">Alamat : </label>
          <input type="text" name="alamat" required value="<?= $penerbit["alamat"]; ?>" autocomplete="off">
        </li><br>
        <li>
          <label for="kota">Kota : </label>
          <input type="text" name="kota" required value="<?= $penerbit["kota"]; ?>" autocomplete="off">
        </li><br>
        <li>
          <label for="telepon">Telepon : </label>
          <input type="text" name="telepon" required value="<?= $penerbit["telepon"]; ?>" autocomplete="off">
        </li><br>
        <li>
          <button type="submit" name="submit">Edit</button>
        </li>
      </ul>

  </fieldset>
</body>
</html>