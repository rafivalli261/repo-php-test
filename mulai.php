<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body style="width: 400px;font-size: 20px;font-family: Helvetica, sans-serif; margin: 0 auto;">
    <?php
        $hello = "<h1>Apakah saya sudah berhasil membuat Hello World ?</h1>";
        echo " $hello Oh rupanya saya berhasil, Alhamdulillah<br>";
        //sekarang mencoba untuk membuat program sederhana, xixixi
        echo "Memulai perulangan <br>";
        for ($i = 1; $i <= 10; $i++ ){
            if ($i > 5){
                echo "<p style='background-color: lightskyblue; padding : 20px'>Wah, Angka sekarang adalah $i </p>";
            } else {
                echo "<p style='background-color: salmon; padding : 20px'>Wuah, Angka sekarang adalah $i </p>";
            }
        }
    ?>
</body>
</html>