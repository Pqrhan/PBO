<?php

class aritmatika {
    var $sisi;
    var $panjang;
    var $lebar;
    var $hasil;
    var $alas;
    var $tinggi;

    function luas($sisi){
        $hasil=$sisi*$sisi;
        return "Hasil luas persegi : ".$hasil."<br>";
    }

    function persegi($panjang, $lebar){
        $hasil=$panjang*$lebar;
        return "Hasil luas persegi Panjang : ".$hasil."<br>";
    }

    function luas_segitiga($alas, $tinggi){
        $hasil=$alas*$tinggi;
        return "Hasil luas segitiga : ".$hasil."<br>";
    }




}


?>