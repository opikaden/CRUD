<?php
require 'functions.php';
$id = $_GET["id_buku"];

if( hapus($id) > 0 ) {
  echo "
          <script>
            alert('Berhasil Dihapus!');
            window.location.href = 'admin.php';
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