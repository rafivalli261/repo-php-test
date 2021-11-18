<?php 

    //jualan produk
    // komik
    //game

    class Produk{
        public $judul = "judul",
               $penulis = "penulis",
               $penerbit = "penerbit",
               $harga = 0;


        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }

        
    }

    // $produk1 = new Produk();
    // $produk2 = new Produk();
    // $produk1->judul = "Eleceed";
    // $produk2->judul = "Genshin Impact";
    // var_dump($produk1);
    // var_dump($produk2->judul);
    $produk3 = new Produk();
    $produk3->judul = "Eleceed";
    $produk3->penulis = "Son Jeho & Kim Hye Jin";
    $produk3->penerbit = "Webtoon";
    $produk3->harga = 20000;
    
    $produk4 = new Produk();
    $produk4->judul = "Genshin Impact";
    $produk4->penulis = "Zhongli";
    $produk4->penerbit = "Mihoyo";
    $produk4->harga = 30000;

    
    echo "Komik : " . $produk3->getLabel();
    echo "<br>";
    echo "<hr>";
    echo "Game : " . $produk4->getLabel();