<?php

// parent class maneger
class Manager{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // function dari parent class
    function sayHello(string $name):void{
        echo "Hello $name myname is Manager $this->name".PHP_EOL;
    }
}

// membuat class child
class VicePresident extends Manager{

    // meng overidding function parent
    function sayHello(string $name): void
    {
        echo "Hello $name my name is VP $this->name".PHP_EOL;
    }
    
}