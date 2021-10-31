<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Post</title>
</head>

<body>
    <form action="halaman_post.php" method="post">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="chara">Character Favorit : </label>
        <input type="text" name="chara" id="chara">
        <br>
        <label for="absen">Apakah Anda Hadir : </label>
        <input type="radio" name="absen" id="hadir" value="Hadir">
        <label for="hadir">Hadir</label>
        <br>
        <input type="radio" name="absen" id="tdk" value="Bolos">
        <label for="tdk">Tidak Hadir</label>
        <br>
        <br>
        <button type="submit">Hayo Gas!</button>
    </form>
</body>

</html>