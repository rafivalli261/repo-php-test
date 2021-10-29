<?php 
    include "koneksi.php";
    $query = mysqli_query($conn, "SELECT FROM mahasiswa WHERE nim = '".$_GET['nim']."'");
    if ($data = mysqli_fetch_array($query)) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update</title>
</head>

<body>
    <h3>Update Data</h3>
    <form action="update.php?nim=<?php echo $data['nim'];?>" method="post">
        NIM : <?= $data['nim']; ?><br>
        Nama : <input type="text" name="nama" id="nama" value=" <?php echo $data['nama'];?>"> <br>
        <input type="submit" value="Update">
    </form>
</body>

</html>
<?php 
    } else echo "Data tidak ditemukan";
?>

<br><a href="formdaftar.php">Daftar</a>
<br><a href="view.php">Lihat Data</a>