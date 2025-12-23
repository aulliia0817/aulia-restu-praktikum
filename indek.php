<!DOCTYPE html>
<html>
    <head>
        <title> Membuat Database dan Menampilkan data dari database dengan PHP </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="judul">
            <h1>Membuat Koneksi Dengan PHP dan MySQL</h1>
            <h2>Menampilkan data dari database</h2>
            <h3>www.unipma.ac.id</h3>
        </div>
        <br/>
        <?php 
        if(isset($GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "input"){
                echo "Data berhasil di input.";
            } else if($pesan == "update"){
                echo "Data berhasil di update.";
            } else if($pesan == "hapus"){
                echo "Data berhasil di hapus.";
            }
        }
        ?>
        <br/>
        <a class="tombol" href="input.php">+ Tambah Data</a>
        <h3>Data User</h3>
        <table border="1" class="table">
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>Opsi</th>
            </tr>
            <?php 
            include "koneksi.php";
            $query_mysql = mysqli_query(mysql: $host, query: "SELECT * FROM mahasiswa") or die(mysqli_error(mysql: $host));
            $nomor = 1;
            while($data = mysqli_fetch_array(result: $query_mysql)){
            ?>
            <tr>
                <td><?php echo $data['npm']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['kelas']; ?></td>
                <td>
                    <a class="edit" href="edit.php?npm=<?php echo $data['npm']; ?>">Edit</a>
                    <a class="hapus" href="hapus.php?npm=<?php echo $data['npm']; ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>

</html>
