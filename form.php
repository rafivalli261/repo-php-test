<?php
    //koneksi database
    mysqli_connect("localhost","root","","phpdasar",);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <a href="#">ubah</a>
            <a href="#">hapus</a>
        </tr>
    </table>
    <!-- cara membuka mysql 
    1. Jika tidak bisa langsung pada mysql.exe di folder xampp, langsung buka cmd
    2.  Terserah mau mode admin atau tidak pokoknya cmd, bukan powershell bukan gitbash
    3. Kemudian pindah ke directory tempat file mysql.exe berada, 'commandnya nanti ->  cd /d <file-directory> '
    4. Kemudian jika sudah berada di direktori / folder tempat mysql.exe berada, sekarang ketik 'mysql -u root', ; u untuk username; dan username default untuk xampp adalah root
    5. Jika ditambah -p maka akan diminta memasukkan password, untuk xampp sendiri password defaultnya adalah null / tidak ada password
    6. Jika sudah maka tampilannya pasti seperti ini =>
    
    Welcome to the MariaDB monitor.  Commands end with ; or \g.
    Your MariaDB connection id is 122
    Server version: 10.4.20-MariaDB mariadb.org binary distribution

    Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

    Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

    MariaDB [(none)]>
    
    ya, mungkin kode sebelumnya masih ada tapi kurang lebih seperti itu intinya
    7. Selamat anda sudah berhasil masuk ke mysql mode awal, untuk masuk menjadi admin diperlukan beberapa langkah lagi, selamat mencari :)
-->
</body>

</html>