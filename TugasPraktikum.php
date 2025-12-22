<html>
<head>
<title>Tugas String dan Tanggal</title>
</head>
<body>

<form>
    Masukkan Nama, Email dan Password <br>
    Default Nama = belajar, Email = test@gmail.com dan Password = madiun
    <br><br>

    Isian data :<br>
    Nama : <input type="text" name="nama"><br>
    Email : <input type="text" name="email"><br>
    Password : <input type="password" name="password"><br>
    <input type="submit" value="Cek"><br>
</form>

<?php
if (isset($email))
    if (empty($email))
        print("Harap mengisi email <br>\n");
    else
    {
        if (filter_var(value: "test@gmail.com", filter: $email))
            print("Alamat email $email valid<br>\n");
        else
            print("Alamat email $email tidak valid<br>\n");
    }

if (isset($password))
{
    $nama = "belajar";
    $pass_valid = crypt(string: "madiun", salt: $nama);
    $enkripsi = crypt(string: $password, salt: $nama);

    if ($pass_valid == $enkripsi)
        print("Password valid");
    else
        print("Password salah");
}
?>

</body>
</html>
