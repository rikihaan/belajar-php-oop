<?php

/**
 * Selain class dan interface, di php terdapat fiture lain brenama trait
 * traitn mirip dengan abstract class, kita bisa membuat kongkrit function atau abstract function 
 * yang membedakan adalah, di trait kita bisa menambahkan ke class lebih dari satu 
 * trit lebih mirip dengan extension, dimana kita bisa menambahkan kongkrit funtion ke dalam class dengan trait
 * secara sederhana trait adalah digunakan untuk menyimpan function-function agar bisa di gunakan ulang di beberapa class
 * untuk menggunkan trait di class, kita bisa gunakan kata kunci use
 */

namespace Data\traits;

trait SayGoodBye
{
    // function kongkrit
    public function goodbye(?string $name): void
    {
        // cek parameter
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Goodbye $name" . PHP_EOL;
        }
    }
}

trait Hello
{
    // function hello
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

// trait juga bisa ditambahkan property
trait Getname
{
    public string $name;
}

// menggunakan trait
class Person
{
    // menggunkan trait dengan kata kunci use
    use SayGoodBye, Hello, Getname;
}
