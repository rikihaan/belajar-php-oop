<?php
namespace Data\One{
    class Conflict {
        var $name;
        function sayHello(string $name){
            echo"Hai $name myname is $this->name".PHP_EOL;
        }
    }
}

namespace Data\Two{
    class Conflict {
        var $name;

        function sayHello(string $name){
            echo "Hello $name myname is $this->name".PHP_EOL;
        }
    }
}