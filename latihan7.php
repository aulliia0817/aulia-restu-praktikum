<!DOCTYPE html>
<html>
    <head>
        <title> LATIHAN 7 PEMROGRAMAN WEB </title>
    </head>
    <body>
        <form method="get">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr align="center">
                <td colspan="3">
                    <input type="submit" name="submit" value="Simpan">
                    &nbsp;
                    <input type="reset" name="reset" value="Reset">
                </td>
                </tr>
            </table>
            <?php 
                if (isset($_GET['submit'])) {
                    $nama = $_GET['nama'];
                    $nim = $_GET['nim'];

                    echo "<br/><br/> INI UOTPUT SESUAI INPUTAN DARI FORM DIATAS <br/>";
                    echo "Nama : " . $nama;
                    echo "<br/>NIM  : " . $nim;
                }
            ?>
        </form>
    </body>
</html>