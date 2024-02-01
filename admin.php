<?php
require 'functions.php';
$tb_buku = query("SELECT * FROM tabel_buku");

// Tombol cari di klik
if( isset($_POST["cari"]) ) {
  $tb_buku = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Toko Buku Berbasis Web</title>
    <style>
      fieldset {
      width: 700px;
      margin: auto;
    }

    </style>
  </head>
  <body>

  <fieldset >

  <legend align="center">Data Buku</legend>
  <center><h2>Toko Buku Muhammad Taufiqurrahman</h2></center>

  <form method="post" action="" style="text-align: center;">
    <label>Kata Pencarian : </label>
    <input type="text" name="keyword" placeholder="Cari..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>

  <center><br><a href="tambah.php" target="_blank">Tambah Data</a><br><br>
  <a href="index.php">HOME</a> |
  <a href="admin.php"> ADMIN</a> |
  <a href="pengadaan.php">PENGADAAN</a></center>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>ID Buku</th>
      <th>Kategori</th>
      <th>Nama Buku</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Penerbit</th>
      <!-- EDIT/DELETE -->
      <th width="100px">OPSI</th>
    </tr>

    <?php foreach( $tb_buku as $row ) : ?>
    <tr>
      <td><?= $row["id_buku"]; ?></td>
      <td><?= $row["kategori"]; ?></td>
      <td><?= $row["nama_buku"]; ?></td>
      <td><?= $row["harga"]; ?></td>
      <td><?= $row["stok"]; ?></td>
      <td><?= $row["penerbit"]; ?></td>
      <td>
        <a href="edit.php?id_buku=<?= $row["id_buku"]; ?>">EDIT</a> |
        <a href="hapus.php?id_buku=<?= $row["id_buku"]; ?>">HAPUS</a>
      </td>
    </tr>
    <?php endforeach; ?>

  </body>
</html>