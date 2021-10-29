<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View PHP</title>
</head>

<body>
    <h3>Melihat Data</h3>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td colspan="2">ACTION</td>
        </tr>
        <?php 
    include "koneksi.php";
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
    while ($data = mysqli_fetch_array($query)){
        echo "<td>" . $data['nama'] . " </td> <td>" . $data['nim']. "</td>";
        echo "<td><a href='formupdate.php?nim=".$data['nim']. " '>Update</a></td>";
        echo "<td><a href='del.php?nim=".$data['nim']."'>Del</a></td></tr>";
    }
    ?>
    </table>
    <br>
    <a href="formdaftar.php">Daftar</a>
</body>

</html>