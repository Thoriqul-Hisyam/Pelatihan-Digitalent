<?php
    // Variabel angka = 1 , Jika variabel angka kurang dari atau sama dengan 100 maka pengulangan akan terus terjadi hingga nilai angka = 100
    for($angka = 1; $angka <=100;$angka++)
    {
    //jika variabel angka di bagi 2 dan sisa baginya adalah 0 maka bilangan tersebut bilangan genap
     if($angka % 2 == 0){
        echo"<b>$angka adalah bilangan genap</b> <br>";
     }else{
        echo"$angka adalah bilangan ganjil <br>";
     }
    }
?>