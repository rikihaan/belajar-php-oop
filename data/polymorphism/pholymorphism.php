<?php
// membuat parent class
class Programmer
{
    public string $name;

    // membuat constructor
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

// class child 1
class BackendProgrammer extends Programmer
{
}
// class child 2
class FrondenProgramer extends Programmer
{
}

// membuat class yang melakukan pholimorphism
class Company
{
    // membuat property dengan type Programmer
    public Programmer $programmer;
    /**
     * Saat kita membuat property dengan type Programmer bukan berati kita hanya bisa mengggunaka data yang ada di class programmer 
     * tapi kita juga bisa menggunakan data yang ada di class turunan nya
     */
}

// check and casts
function helloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof FrondenProgramer) {
        echo "Hello Frondend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
