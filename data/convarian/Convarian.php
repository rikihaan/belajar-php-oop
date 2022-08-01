<?php
/**
 * Saat kita meng overaide function dari parent class, biasanya di child class kita akan membuat function yang sama dengan function di parent class
 * convarian memungkinkan kita mengoveraide function yang ada di parent class, denngan return value yang lebih spesifik
 */
namespace Data;
require_once "data/abstract/abstractFunction.php";
//  membuat covarian
interface AnimalShelter{
    function addopt(string $name):Animal;
} 

// disini kita akan iplement interface AnimalSelter

class DogShalter implements AnimalShelter{
    
    // seperti biasa karena kita implen interfae yang memiliki abstract function maka kita wajib overaide
    // disinlah kita kkeguanan covarian kita bisa mengembalikan return yang berbeda dari parent nya, karena Dogshalter maka kita akan balikan lebih spesifik yaitu Class dog (chid dari class Animal2)
    function addopt(string $name): Dog
    {
        $dog =new Dog();
        $dog->name=$name.PHP_EOL;
        return $dog;
    }
}

class CatShelter implements AnimalShelter{
    function addopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name=$name;
        return $cat;
    }
}