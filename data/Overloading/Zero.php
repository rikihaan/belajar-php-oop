<?php
/**
 * Overloading adalah kemampuan secara dinamis membuar properti atau function 
 * ini mirip meta programing pada bahasa ruby
 * namun ini berbeda dengan function overloading di bahasa java
 * overloading ini erat kaitannya dengan magic function, yang sebelumnya kita bahas
 */

 /**
  * PROPERTIED OVERLOADING 
  * Saat kita mengakses properties, maka secara otomatis properties akan di akses
  * Namun jika ternyata properties tersebut tidak ada di objectnya, maka PHP tidak secara otomatis menjadikan itu error
  * php akan melakukan fallback ke magic function
  * dengan demikin kita bisa membiat properties secara dinamis dengan memanfaatkan magic function tersebut
  * Ada beberapa magic function yang bisa di gunakan untuk properties overloading
  */

//   kode properties overloading
class Zero{
    private array $properties=[];

    // di ekseskusi ketika kita memanggil prperties yang tidak ada
    public function __get($name)
    {
        return $this->properties[$name];
    }

    // di ekseskusi ketika mengset properties yang tidak ada
    public function __set($name, $value)
    {
        $this->properties[$name]=$value;
    }

    // di eksekusi ketika melakukan penegecekan properties yang tidak ada
    public function __isset($name):bool
    {
        return isset($this->properties[$name]);
    }

    // di eksekusi ketika kita ingin menghapus properties yang tidak ada
    public function __unset($name):void
    {
         unset($this->properties[$name]);
    }

    // function overloadnig

    // di eksekusi ketiak memanggil function object yang tidak ada
    public function __call($name, $arguments)
    {
        $join=join(',',$arguments);
        echo "call function $name with argument $join".PHP_EOL;
    }

    // di eksekusi ketika memanggila static function yang tidak ada
    public function __callStatic($name, $arguments)
    {
        $join=join(',',$arguments);
        echo "call static function $name with argument $join".PHP_EOL;
    }
}