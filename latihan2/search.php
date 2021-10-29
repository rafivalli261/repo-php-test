<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>
    <h3>Hasil Pencarian Data</h3>
    <?php 
        include "koneksi.php";
        $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim LIKE '%".$_GET['nim']. " %' OR nama LIKE '%". $_GET['nama']."%'");
        $jumlah = mysqli_num_rows($query);
        echo "Jumlah data hasil pencarian : $jumlah";
        if ($jumlah > 0){
            

    ?>
    <table border="1">
        <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td colspan="2">Action</td>
        </tr>
        <?php 
            while ($data = mysqli_fetch_array($query)){
                echo "<tr><td>".$data['nim']. "</td><td>" . $data['nama'] . "</td>";
                echo "<td><a href='formupdate.php?nim= " . $data['nim'] . "'>Update</a></td>";
                echo "<td><a href='del.php?nim=" . $data['nim'] . "'>Del</a></td></tr>";
            }
        ?>
    </table>
    <?php } ?>
    <br><a href="view.php">Lihat Data</a>
    <br><a href="formsearch.php">Cari Ulang</a>
</body>

</html>