<?php

/**
 * Saat kita membuat abstract class , didalamnya kita juaga bisa membuat sebuah abstract function
 * abstaract function tidak boleh memiliki block function
 * abstract function tidak boleh memiliki akses modifier private
 * abstract function memaksa class child dari class abstract, yang memiliki abstract function tersebut untuk mengoverride function abstract nya
 */

namespace Data;

abstract class Animal
{
    public string $name;
    public abstract function run();
}

class Cat extends Animal
{
    public function run()
    {
        echo "Cat $this->name is Run" . PHP_EOL;
    }
}
