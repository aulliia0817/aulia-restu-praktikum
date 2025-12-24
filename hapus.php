<?php 
include 'koneksi.php';
$npm = $_POST['npm'];

mysqli_query(mysql: $host, query: "DELETE FROM mahasiswa WHERE npm='$npm'") or die(mysqli_error(mysql: $host));
header(header: "location: index.php?pesan=hapus")
?>