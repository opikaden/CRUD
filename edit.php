<?php
require 'functions.php';

// Ambil data dari URL
$id = $_GET["id_buku"];

// Query data dari id
$buku = query("SELECT * FROM tabel_buku WHERE id_buku = '$id'")[0];


if( isset($_POST["submit"]) ) {
  
  // Untuk cek berhasil/tidak
  if( edit($_POST) > 0 ) {
    echo "
          <script>
            alert('Berhasil!');
            window.location.href = 'admin.php';
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
  <center><h2>Edit Data Buku</h2></center>

    <form action="" method="post">
      <input type="hidden" name="id_buku" value="<?= $buku["id_buku"]; ?>">
      <ul style="list-style: none;">
        <li>
          <label for="kategori">Kategori : </label>
          <input type="text" name="kategori" required value="<?= $buku["kategori"]; ?>" autocomplete="off">
        </li><br>
        <li>
          <label for="nama_buku">Nama Buku : </label>
          <input type="text" name="nama_buku" required value="<?= $buku["nama_buku"]; ?>" autocomplete="off">
        </li><br>
        <li>
          <label for="harga">Harga : </label>
          <input type="text" name="harga" required value="<?= $buku["harga"]; ?>" autocomplete="off">
        </li><br>
        <li>
          <label for="stok">Stok : </label>
          <input type="text" name="stok" required value="<?= $buku["stok"]; ?>" autocomplete="off">
        </li><br>
        <li>
          <label for="penerbit">Penerbit : </label>
          <input type="text" name="penerbit" required value="<?= $buku["penerbit"]; ?>" autocomplete="off">
        </li><br>
        <li>
          <button type="submit" name="submit">Edit</button>
        </li>
      </ul>

  </fieldset>
</body>
</html>