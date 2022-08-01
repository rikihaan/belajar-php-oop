<?php
/**
 * GENERATOR
 * Sebelumnya kita tahu bahwa untuk membuat object agar bisaa di iterasi, kita memnngunakan Iterator
 * Namun pembuatan Iterator secara manual sangat ribet 
 * untungnya di php, Terdapat fitur generator, yang kita bisa gunakan untuk membuat iterator seara otomatis hanya menggunakan kata kunci yield
 */

 function ganjil(int $max): Iterator{
    for ($i=0; $i <$max ; $i++) { 
        //cek apakah angka ganjil
        if ($i % 2==1){
            yield $i;
        }
        # code...
    }
 }

 $ganjil =ganjil(100);
 foreach ($ganjil as $gjl){
    echo "$gjl".PHP_EOL;
 }

//  tampa generator yield
function genap(int $max):Iterator{
    $array=[];
    for ($i=0; $i < $max; $i++) { 
        #cek ganil atau genap
        if($i % 2==0){
            $array[]=$i;
        }
    }
    return new ArrayIterator($array);
}

foreach(genap(100) as $genap){
    echo "Genap Ke-$genap".PHP_EOL;
}