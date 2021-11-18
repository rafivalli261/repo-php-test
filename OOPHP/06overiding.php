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

        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";

            return $str;
        }

        
    }

    class Komik extends Produk{

        public $jmlHalaman;

        public function __construct($judul,$penulis, $penerbit, $harga, $jmlHalaman)
        {
            parent::__construct($judul, $penulis, $penerbit, $harga);

            $this->jmlHalaman = $jmlHalaman;

        }
        public function getInfoProduk(){
            $str = "Komik : " . parent :: getInfoProduk() . " - {$this->jmlHalaman} Halaman";


            return $str;
        }
        
    }

    class Game extends Produk{
        public $waktuMain;

        public function __construct($judul,$penulis, $penerbit, $harga, $waktuMain)
        {
            parent::__construct($judul,$penulis, $penerbit, $harga);

            $this->waktuMain = $waktuMain;
        }

        public function getInfoProduk(){
            $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";

            return $str;
        }
    }



    class CetakInfoProduk{
        public function cetak(Produk $produk){
            $str = "{$produk->judul} | {$produk->getLabel()} | (Rp{$produk->harga})";
            return $str;
        }
    }


    $produk1 = new Komik("Eleceed", "Son Jeho & Kim Hye Jin", "Webtoon", 20000, 100);
    
    $produk2 = new Game("Genshin Impact", "Zhongli", "Mihoyo", 30000, 256320);

    echo $produk1->getInfoProduk();
    echo "<hr>";
    echo $produk2->getInfoProduk();