<?php
class Student{
    public $id;
    public $name;
    private $sample;

    public function setSample($sample){
        $this->sample=$sample;
    }

    // manambahakan magic funtion toString()
    public function __toString()
    {
        return "Student id :$this->id Name : $this->name".PHP_EOL;
    }

    // menambahkan magic function __invoke()
    public function __invoke(...$argument)
    {
        $join = join(',', $argument);
        echo "invoke student with argument $join".PHP_EOL;
    }

    // manambahkan magic function debugInfo()
    public function __debugInfo():array
    {
       return [
        'id'=>$this->id,
        'name'=>$this->name,
        'author'=>'Asep Riki'

       ];
    }
}