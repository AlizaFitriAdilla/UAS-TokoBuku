<?php
$conn_str = "host=heffalump.db.elephantsql.com " .
    "port=5432 " .
    "user=cpxuzmfn " .
    "dbname=cpxuzmfn " .
    "password=HeXjWc8OraOeVN9KgGIbo59bn7oRBbT6";
$conn = pg_connect($conn_str);

// if($conn) {
//     echo "<h3>Koneksi Berhasil</h3>";
// } else {
//     echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
// }
?>