<?php

    //Membuat function aritmatika
    function penjumlahan($bilangan1,$bilangan2)
    {
        //menampung nilai Parameter $bilangan1 dan $bilangan 2
        $angka1 = $bilangan1;
        $angka2 = $bilangan2;
        //proses aritmatika
        $hasiljumlah=$angka1+$angka2;
        //hasil akhir
        return $hasiljumlah;
    }
    function pengurangan($bilangan1,$bilangan2)
    {
        //menampung nilai Parameter $bilangan1 dan $bilangan 2
        $angka1 = $bilangan1;
        $angka2 = $bilangan2;
        //proses aritmatika
        $hasilkurang=$angka1-$angka2;
        //hasil akhir
        return $hasilkurang;
    }
    function perkalian($bilangan1,$bilangan2)
    {
        //menampung nilai Parameter $bilangan1 dan $bilangan 2
        $angka1 = $bilangan1;
        $angka2 = $bilangan2;
        //proses aritmatika
        $hasilkali=$angka1*$angka2;
        //hasil akhir
        return $hasilkali;
    }
    function pembagian($bilangan1,$bilangan2)
    {
        //menampung nilai Parameter $bilangan1 dan $bilangan 2
        $angka1 = $bilangan1;
        $angka2 = $bilangan2;
        //proses aritmatika
        $hasilbagi=$angka1/$angka2;
        //hasil akhir
        return $hasilbagi;
    }

    //Pemanggilan function aritmatika
    $hasiljumlah = penjumlahan(9,3);
    $hasilkurang = pengurangan(9,3);
    $hasilkali = perkalian(9,3);
    $hasilbagi =pembagian (9,3);

    //memunculkan hasil 
    echo"Bilangan 1 : 9 <br>";
    echo"Bilangan 2 : 3 <br>";
    echo"============================<br>";
    echo" Hasil penjumlahan adalah = $hasiljumlah <br>" ; 
    echo" Hasil pengurangan adalah = $hasilkurang <br>" ; 
    echo" Hasil perkalian adalah = $hasilkali    <br>" ; 
    echo" Hasil pembagian adalah = $hasilbagi <br>" ; 
    
    

?>