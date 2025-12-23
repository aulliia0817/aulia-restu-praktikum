<?php 
include 'koneksi.php';
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];

mysqli_query(mysql: $host, query: "INSERT INTO mahasiswa VALUES('$npm', '$nama', '$alamat', '$kelas')");
header(header: "location: index.php?pesan=input")
?>
