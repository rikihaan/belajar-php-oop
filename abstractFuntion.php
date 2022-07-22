<?php
require_once "data/abstract/abstractFunction.php";

use Data\{Animal, Cat};
// mebuat class Cat extends Animal
/**
 * Karena class Cat Turunan dari class abstrac yang memiliki abstract function run, maka class Cat wajib implement/overide function run( jika tidak maka akan error)
 */
$cat = new Cat();
$cat->name = "Cartina";
$cat->run();

class Dog extends Animal
{
    public function run()
    {
        echo "Dog $this->name is Run" . PHP_EOL;
    }
}

$dogs = new Dog();
$dogs->name = "Doggy";
$dogs->run();

$cat2 = new Cat();
$cat2->name = "Andika";
$cat2->run();
