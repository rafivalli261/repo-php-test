<?php 
//cek apakah tidak ada data di POST
    if (!isset($_POST['nama']) ) {
        //redirect
        header("Location: latihan_post.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Post</title>
</head>

<body>
    <h1>Selamat Datang <?= $_POST['nama'];?></h1>
    <?php 
        echo $_POST['absen'];
        echo var_dump($_POST['absen']);
        echo "<h3>" . $_POST['chara'] . " Be Like : </h3>";
        echo "Shine!!!";
    ?>
</body>

</html>