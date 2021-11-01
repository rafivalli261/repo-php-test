<?php 
    session_start();
    if (!isset($_SESSION["login"])) {
        echo "
            <script>
	            document.location.href = 'login.php';
            </script>
              "; 
    }
    require 'functions.php';
    $menu_rafi = query("SELECT * FROM menu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Admin -->
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Restoran</title>
</head>

<body>
    <h1>Administrator</h1>
    <a href="tambah.php" class="tambah">Tambah Makanan</a>
    <a href="logout.php" class="logout">Logout</a>
    <div class="container">
        <table>
            <tr>
                <th>id</th>
                <th>nama makanan</th>
                <th>harga</th>
                <th>foto</th>
                <th>aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($menu_rafi as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["harga"]; ?></td>
                <td><img src="image/<?= $row["foto"]; ?>" alt=""></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>"
                        onclick="return confirm('Apakah anda yakin mau menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>