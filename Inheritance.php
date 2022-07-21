<?php
// calss perent
class Manager{
    var $name ;

    function sayHelo(string $name):void{
        echo "Hello $name my name Is $this->name".PHP_EOL;
    }
}

// class chiled
class VicPresident extends Manager{}

// membuat instance obejet dari parent class
$eko = new Manager("dadang");
$eko->name="Eko Kurniawan Khannedy";
$eko->sayHelo("Riki");

// membuat instance obeject dari chiled class
$rendi = new VicPresident("Agus");
$rendi->name="Rendi Apriandi";
$rendi->sayHelo("Jaka");
