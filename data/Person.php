<?php
// cara pembauatan Class
class Person
{
    // membaut constant di class
    const AUTHOR = "Asep Riki";
    // menambah kan property / field
    var string $name;
    var string $address;
    var string $country;

    // menambahkan constructor
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->addres = $address;
    }

    // manambah kan function
    function sayHello(?string $name)
    {
        // cek apakah parameter $name == null
        if (is_null($name)) {
            // jika true atau null
            echo "Hai My name is $this->name" . PHP_EOL;
        } else {
            // jika tidak null
            echo "Hai $name My name is $this->name" . PHP_EOL;
        }
    }

    // mengunakan kata kunci self
    function info()
    {
        // tanpa self
        echo "Author" . Person::AUTHOR . PHP_EOL;
        // menggunakan self
        echo " AUTHOR " . self::AUTHOR . PHP_EOL;
    }
}
