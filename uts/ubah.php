<?php 
    require 'functions.php';
    //ambil data di url

    
    $id = $_GET["id"];

    //query data makanan berdasarkan id
    $mkn = query("SELECT * FROM menu WHERE id = $id")[0];
    
    //cek apakah tombol submit telah ditekan atau belum
    if(isset($_POST["submit"])){
        
        // cek apakah data berhasil diubah atau tidak
        if (ubah($_POST) > 0) {
            
            echo "
            <script>
	            alert('Data Berhasil Diubah!');
	            document.location.href = 'admin.php';
            </script>
            ";     
        }
        else{
            echo "
            <script>
	            alert('Data Gagal Diubah!');
	            document.location.href = 'admin.php';
            </script>
            ";    
            //echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>

<body>
    <h1>Ubah Data Makanan</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><input type="hidden" name="id" value="<?= $mkn["id"]?>">
                </td>
            </tr>
            <tr>
                <td><label for="nama">Nama Makanan : </label></td>
                <td><input type="text" name="nama" id="nama" autocomplete="off" required value="<?= $mkn["nama"]?>">
                </td>
            </tr>
            <tr>
                <td><label for="harga">Harga Makanan : </label></td>
                <td><input type="text" name="harga" id="harga" autocomplete="off" required value="<?= $mkn["harga"]?>">
                </td>
            </tr>
            <tr>
                <td><label for="foto">Foto Makanan : </label></td>
                <td><input type="text" name="foto" id="foto" autocomplete="off" required value="<?= $mkn["foto"]?>">
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>