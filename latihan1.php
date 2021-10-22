<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliah PHP Dasar</title>
    <style>
    html {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 16px;
    }

    h1 {
        font-size: 2rem;
    }

    div {
        font-size: 2rem;
        font-weight: bold;
        font-style: oblique;
        color: #00f;
    }

    #genap {
        font-size: 2rem;
        font-weight: bold;
        font-style: oblique;
        color: #00f;
    }

    #ganjil {
        font-size: 2rem;
        font-weight: bold;
        font-style: oblique;
        color: #f0f;

    }

    .kotak1 {
        background-color: #ff0;
        width: 200px;
        height: 100px;
        text-align: center;
    }

    .usia {
        color: rgb(128, 0, 128);
    }
    </style>
</head>

<body>
    <?php
    
        echo "<h1>Hello, World!</h1>";
        echo "Ad Astra Abbysosque, Welcome to Advanturer's Guild!";
        echo "<br><br>";
        // $nama = "Yoimiya Naganohara";
        // echo "Hallo " . $nama . "!";
        $kotak = array("Dina"=>20,"Yogi"=>19,"Riska"=>21);
        echo "<br> Output " . $kotak["Dina"];
        echo "<br> Output " . $kotak["Yogi"];
        echo "<br> Output " . $kotak["Riska"];
        // for ($i = 0; $i < 6; $i++){
        //     $a = $i + 1;
        //     echo "<div class='kotak1'> $a  </div><br>";
        // }
        echo "<br>";
        echo "<br>";
        $b = 97;
        if ($b % 2 == 0) {
            echo "<div>Bilangan Genap</div>";
        }
        else {
            echo "<div>Bilangan Ganjil</div>";
        }
        // $c = $b % 2; //bisa juga langsung ditaruh di switch langsung, hmm
        // switch ($c) {
        //     case '1':
        //         echo "<div id='ganjil'>Bilangan Ganjil</div>";
        //         break;
            
        //     default:
        //         echo "<div id='genap'>Bilangan Genap</div>";
        //         break;
        // }

        $d = 1;
        switch ($d) {
            case '0':
                echo "<div>Nol</div>";
                break;
            case '1':
                echo "<div>Satu</div>";
                break;
            case '2':
                echo "<div>Dua</div>";
                break;
            default:
                echo "<div>Lainnya</div>";
                break;
        }
        echo "<br>";
        echo "<br>";
        //$halo = array("Matek", "Fisika", "Bio", "KIM");
        foreach ($kotak as $key) {
            echo "<div class='usia'>$key</div>";
        }

    ?>

</body>

</html>