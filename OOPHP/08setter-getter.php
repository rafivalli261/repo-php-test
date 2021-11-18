<?php 

    //jualan produk
    // komik
    //game


    //inheritance -> hierarki parent,child
    //child class mewarisi semua properti dan method parentnya saat visible

    //visibility public ,protected, private

class Produk{
        private $judul,
               $penulis,
               $penerbit,
               $diskon,
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

        public function setJudul($judul){
            $this->judul = $judul;
        }
        public function setPenulis($penulis){
            $this->penulis = $penulis;
        }
        public function setPenerbit($penerbit){
            $this->penerbit = $penerbit;
        }

        public function setDiskon($diskon){
            $this->diskon = $diskon;
        }

        public function getJudul(){
            return $this->judul;
        }
        public function getPenulis(){
            return $this->penulis;
        }
        public function getPenerbit(){
            return $this->penerbit;
        }
        public function getDiskon(){
            return $this->diskon;
        }

        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";

            return $str;
        }

        public function setHarga($harga){
            return $this->harga = $harga;
        }

        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
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
    echo "<hr>";
    $produk2->setDiskon(50);
    echo $produk2->getHarga();
    echo "<hr>";
    $produk3 = new Komik("My Fair Lady","Jack the Ripper","London Press",20000,228,0);
    echo $produk3->getJudul() . '<br>';
    $produk3->setJudul("London Bridge is Falling Down");
    echo $produk3->getJudul();
    echo "<br>";
    echo $produk3->getPenulis();
    echo "<br>";
    echo $produk3->getPenerbit();
    echo "<br>";
    echo $produk3->getHarga();



    