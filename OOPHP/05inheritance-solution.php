<?php 

    //jualan produk
    // komik
    //game


    //inheritance -> hierarki parent,child
    //child class mewarisi semua properti dan method parentnya saat visible

// use Produk as GlobalProduk;

class Produk{
        public $judul,
               $penulis,
               $penerbit,
               $harga,
               $jmlHalaman,
               $waktuMain;

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }

        public function __construct($judul = "Judul",$penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $jmlHalaman = 0, $waktuMain = 0)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;

        }

        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";

            return $str;
        }

        
    }

    class Komik extends Produk{
        public function getInfoProduk(){
            $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp{$this->harga}) - {$this->jmlHalaman} Halaman";


            return $str;
        }
        
    }

    class Game extends Produk{

        public function getInfoProduk(){
            $str = "Game : {$this->judul} | {$this->getLabel()} | (Rp{$this->harga}) ~ {$this->waktuMain} Jam";

            return $str;
        }
    }



    class CetakInfoProduk{
        public function cetak(Produk $produk){
            $str = "{$produk->judul} | {$produk->getLabel()} | (Rp{$produk->harga})";
            return $str;
        }
    }


    $produk1 = new Komik("Eleceed", "Son Jeho & Kim Hye Jin", "Webtoon", 20000, 100, 0, "Komik");
    
    $produk2 = new Game("Genshin Impact", "Zhongli", "Mihoyo", 30000, 0, 256320, "Game");

    echo $produk1->getInfoProduk();
    echo "<hr>";
    echo $produk2->getInfoProduk();