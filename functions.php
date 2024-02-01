<?php
// Koneksi Databse
$db = mysqli_connect("localhost", "root", "", "db_toko_buku");

// Query
function query($query) {
  global $db;
  $result = mysqli_query($db, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }

  return $rows;

}

// Tambah Buku
function tambah($data) {
  global $db;
  $id = htmlspecialchars($data["id_buku"]);
  $kategori = htmlspecialchars($data["kategori"]);
  $nama = htmlspecialchars($data["nama_buku"]);
  $harga = htmlspecialchars($data["harga"]);
  $stok = htmlspecialchars($data["stok"]);
  $penerbit = htmlspecialchars($data["penerbit"]);

  // Query Insert Data
  $query = "INSERT INTO tabel_buku
            VALUES
            ('$id', '$kategori', '$nama', '$harga', '$stok', '$penerbit')
            ";
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);

}

// Tambah Penerbit
function tambah1($data1) {
  global $db;
  $id_penerbit = htmlspecialchars($data1["id_penerbit"]);
  $nama_penerbit = htmlspecialchars($data1["nama"]);
  $alamat = htmlspecialchars($data1["alamat"]);
  $kota = htmlspecialchars($data1["kota"]);
  $telepon = htmlspecialchars($data1["telepon"]);

  // Query Insert Data
  $query = "INSERT INTO tabel_penerbit
            VALUES
            ('$id_penerbit', '$nama_penerbit', '$alamat', '$kota', '$telepon')
            ";
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);

}

// Hapus Buku
function hapus($id) {
  global $db;
  mysqli_query($db, "DELETE FROM tabel_buku WHERE id_buku = '$id'");

  return mysqli_affected_rows($db);

}

// Hapus Penerbit
function hapus1($id1) {
  global $db;
  mysqli_query($db, "DELETE FROM tabel_penerbit WHERE id_penerbit = '$id1'");

  return mysqli_affected_rows($db);

}

// Edit Buku
function edit($data) {
  global $db;
  $id = htmlspecialchars($data["id_buku"]);
  $kategori = htmlspecialchars($data["kategori"]);
  $nama = htmlspecialchars($data["nama_buku"]);
  $harga = htmlspecialchars($data["harga"]);
  $stok = htmlspecialchars($data["stok"]);
  $penerbit = htmlspecialchars($data["penerbit"]);

  // Query Update Data
  $query = "UPDATE tabel_buku SET
            kategori = '$kategori',
            nama_buku = '$nama',
            harga = '$harga',
            stok = '$stok',
            penerbit = '$penerbit'
            WHERE id_buku = '$id'
            ";
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);

}

// Edit Penerbit
function edit1($data1) {
  global $db;
  $id_penerbit = htmlspecialchars($data1["id_penerbit"]);
  $nama_penerbit = htmlspecialchars($data1["nama"]);
  $alamat = htmlspecialchars($data1["alamat"]);
  $kota = htmlspecialchars($data1["kota"]);
  $telepon = htmlspecialchars($data1["telepon"]);

  // Query Insert Data
  $query = "UPDATE tabel_penerbit SET
            nama = '$nama_penerbit',
            alamat = '$alamat',
            kota = '$kota',
            telepon = '$telepon'
            WHERE id_penerbit = '$id_penerbit'
            ";
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);

}

// Search Buku
function cari($keyword) {
  $query = "SELECT * FROM tabel_buku
            WHERE 
            id_buku LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%' OR
            nama_buku LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%'
            ";
  
  return query($query);

}

//Search Penerbit
function cari1($keyword1) {
    global $db;

    $query = "SELECT * FROM tabel_penerbit
              WHERE
              id_penerbit LIKE '%$keyword1%' OR
              nama LIKE '%$keyword1%' OR
              kota LIKE '%$keyword1%'
              ";

    return query($query);

}


?>