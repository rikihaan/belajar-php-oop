<?php
trait A{
    function doA() {
        echo "a".PHP_EOL;
    }

    function doB(){
        echo "b".PHP_EOL;
    }
}

trait B{
    function doA() {
        echo "B".PHP_EOL;
    }

    function doB(){
        echo "B".PHP_EOL;
    }
}

class TraitConflict{
    use A,B{
        B::doA insteadof A;
        A::doB insteadof B;
    }
}

$sample = new TraitConflict();
$sample->doA();
$sample->doB();