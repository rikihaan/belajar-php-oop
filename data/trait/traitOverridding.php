<?php
/**
 * Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait maka akan di overriding oleh function yang ada di trait
 * Namun jika kita membuat function yang sama di class nya, maka secara otomatis akan mengoveraide function di trait
 * sehingga posisinya ParrentClass = override by= trait = override by => child class
 */

 namespace Data\traits2;

 trait Hello{
    function sayHello(?string $name):void{
        if(is_null($name)){
            echo "Hello".PHP_EOL;
        }else{
            echo "Hello $name".PHP_EOL;
        }
    }
 }

 class Person2 {
    function sayHello(?string $name):void{
        if(is_null($name)){
            echo "Hello in Person 2".PHP_EOL;
        }else{
            echo "Hello in Person 2 $name".PHP_EOL;
        }
    }
 }

 class Person  {
    use Hello;
   
 }

 