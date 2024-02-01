<?php
require 'functions.php';
$id1 = $_GET["id_penerbit"];

if( hapus1($id1) > 0 ) {
  echo "
          <script>
            alert('Berhasil Dihapus!');
            window.location.href = 'pengadaan.php';
          </script>
          ";
}

else{
  echo "
          <script>
            alert('Gagal Dihapus!');
          </script>
          ";
}

?>