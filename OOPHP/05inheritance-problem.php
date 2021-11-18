<?php 

    //jualan produk
    // komik
    //game


    //inheritance -> hierarki parent,child
    class Produk{
        public $judul,
               $penulis,
               $penerbit,
               $harga,
               $jmlHalaman,
               $waktuMain,
               $tipe;

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }

        public function __construct($judul = "Judul",$penulis = "Penulis", $penerbit = "Penerbit", $harga = "Harga", $jmlHalaman = 0, $waktuMain = 0, $tipe)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;

        }

        public function getInfoLengkap(){
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
            if($this->tipe == "Komik"){
                $str .= " - {$this->jmlHalaman} Halaman";
            } elseif ($this->tipe == "Game"){
                $str .= " - {$this->waktuMain} Jam.";
            }

            return $str;
        }

        
    }

    class CetakInfoProduk{
        public function cetak(Produk $produk){
            $str = "{$produk->judul} | {$produk->getLabel()} | (Rp{$produk->harga})";
            return $str;
        }
    }


    $produk1 = new Produk("Eleceed", "Son Jeho & Kim Hye Jin", "Webtoon", 20000, 100, 0, "Komik");
    
    $produk2 = new Produk("Genshin Impact", "Zhongli", "Mihoyo", 30000, 0, 256320, "Game");

    echo $produk1->getInfoLengkap();
    echo "<hr>";
    echo $produk2->getInfoLengkap();