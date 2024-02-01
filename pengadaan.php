<?php
require 'functions.php';
$tb_penerbit = query("SELECT * FROM tabel_penerbit");

// Tombol cari di klik
if( isset($_POST["cari1"]) ) {
  $tb_penerbit = cari1($_POST["keyword1"]);
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

  <legend align="center">Data Penerbit</legend>
  <center><h2>Toko Buku Muhammad Taufiqurrahman</h2></center>

  <form method="post" action="" style="text-align: center;">
    <label>Kata Pencarian : </label>
    <input type="text" name="keyword1" placeholder="Cari..." autocomplete="off">
    <button type="submit" name="cari1">Cari</button>

  <center><br><a href="tambah1.php" target="_blank">Tambah Data</a><br><br>
  <a href="index.php">HOME</a> |
  <a href="admin.php"> ADMIN</a> |
  <a href="pengadaan.php">PENGADAAN</a></center>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>ID Penerbit</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Kota</th>
      <th width="130px">Telepon</th>
      <!-- EDIT/DELETE -->
      <th width="100px">OPSI</th>
    </tr>

    <?php foreach( $tb_penerbit as $row ) : ?>
    <tr>
      <td><?= $row["id_penerbit"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["alamat"]; ?></td>
      <td><?= $row["kota"]; ?></td>
      <td><?= $row["telepon"]; ?></td>
      <td>
        <a href="edit1.php?id_penerbit=<?= $row["id_penerbit"]; ?>">EDIT</a> |
        <a href="hapus1.php?id_penerbit=<?= $row["id_penerbit"]; ?>">HAPUS</a>
      </td>
    </tr>
    <?php endforeach; ?>

  </body>
</html>