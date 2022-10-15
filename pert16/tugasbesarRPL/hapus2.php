<?php

require 'functions.php';
$id = $_GET["id"];

if( hapus2($id) > 0 ){
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'guru.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'guru.php';
            </script>
        ";
    }

?>