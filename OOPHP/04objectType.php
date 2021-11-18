<?php 

    //jualan produk
    // komik
    //game

    class Produk{
        public $judul,
               $penulis,
               $penerbit,
               $harga;

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }

        public function __construct($judul = "Judul",$penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga")
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        
    }

    class CetakInfoProduk{
        public function cetak(Produk $produk){
            $str = "{$produk->judul} | {$produk->getLabel()} | (Rp{$produk->harga})";
            return $str;
        }
    }


    $produk1 = new Produk("Eleceed", "Son Jeho & Kim Hye Jin", "Webtoon", 20000);
    
    $produk2 = new Produk("Genshin Impact", "Zhongli", "Mihoyo", 30000);
    
    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "<hr>";
    echo "Game : " . $produk2->getLabel();
    echo "<br>";
    $infoProduk1 = new CetakInfoProduk();
    echo $infoProduk1->cetak($produk1);
    echo "<br>";
    $infoProduk2 = new CetakInfoProduk();
    echo $infoProduk2->cetak($produk2);