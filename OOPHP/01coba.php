<?php

    //kelas bisa menympan property dan method
    class Coba{
        public $a; //property

        //method
        public function b(){
                
        }
    }

    //object -> instance yang didefinisikan oleh kelas

    $a = new Coba();
    $b = new Coba();

    var_dump($a);