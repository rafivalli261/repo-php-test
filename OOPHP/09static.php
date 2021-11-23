<?php 

class contohStatic{
    public static $angka = 1;

    public static function halo(){
        return "Halo World " . self::$angka++ . " Kali";
    }

}

echo contohStatic::$angka;
echo "<br>";
echo contohStatic::halo();
echo "<hr>";
echo contohStatic::halo();

// static keyword
// member yang terkait dengan class , bukan object
// nilai static akan selalu tetap meskipun object diinstansi berulang kali
// membuat kode menjadi prosedural
// biasa digunakan untuk membuat fungsi bantuan / helper
// atau digunakan di class-class utility pada framework

?>