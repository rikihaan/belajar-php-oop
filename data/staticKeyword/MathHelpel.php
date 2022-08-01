<?php
/**
 * Kata kunci static adalah keyword yang bisa kita guankan untuk membuat propertis atau function di class bisa di akses secara lansung tanpa menginisiasi class nya terlebih dahulu
 * Namun ingat, saat membuat static properrtis atau function, secara otomatis hal itu tidak akan berhubungan lagi dengan class instace yang kita buat
 * untuk mengakses static propertis dan funtion sama seperti mengakses constant, kita bisa menggunaka operator ::
 * static function tidak bisa mengakses function biasa, karena function bisa menempel pada class instance sedangakan static tidak 
 */

//  membuat static propertis
class MathHelper{

    static public string $name="MathHelper";

    // static function
    static public function sum(int...$numbers){
        $total=0;
        foreach($numbers as $number){
            $total += $number;
        }

        return $total;
    }
}

// mengkases static property
echo MathHelper::$name.PHP_EOL;

// static tidak menempel pada class
$math =new MathHelper();
var_dump($math);

$sum=MathHelper::sum(10,20,40);
echo $sum.PHP_EOL;

