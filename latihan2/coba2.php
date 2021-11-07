<?php 
    require 'functions.php';
    $hasil = mysqli_query($conn,"SELECT * FROM users");
    $halo = mysqli_fetch_object($hasil);
    class doremon{
        public $id, 
                $username, 
                $password;
    }
    $ayay = [];
    while ($isi = mysqli_fetch_object($hasil)) {
        // $ayay[] = $isi;
        $doremon = $isi;
    }

    // $halo = $ayay;

    var_dump($doremon);
    // function kueri($query){
    //     global $conn;
    //     $hasil = mysqli_query($conn, $query);
    //     $rows = [];
    //     while($row = mysqli_fetch_object($hasil)){
    //         $rows[] = $row;
    //     }
    //     return $rows;
    // }

    // $data = query("SELECT * FROM users");

    // var_dump($data);
    // echo "<hr>";
    // foreach ($data as $key) {
    //     echo $key['id'] . "<br>";
    //     echo $key['username'] . "<br>";
    //     echo $key['password'] . "<br>";
    //     echo "<hr>";

    // }






?>