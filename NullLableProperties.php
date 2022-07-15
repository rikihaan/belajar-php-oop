<?php

/**
 * Null Lable Properties
 * Saat kita menambah type declaration di properrties atau function argument, maka secara otomatis kita tidak bisa mengirimkan data null kedalam properties atau function
 * di php 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null ke properties atau function argument
 * caranya sebelum type declaration nya, kita bisa tambahkan tanda ?
 *
 */

//  membuat class
class Person
{
    // mendeclarasika property atau filed, dengan type declaration dan null properties
    var string $name;
    var string $address;
    // var string $country;
    // naamabahkan nullable pada property country
    var ?string $country;
}

// error jika kita mengirim null tanpa set nullable properties
// $person = new Person();
// $person->name = "Asep Riki";
// $person->addres = "Siliwangi";
// $person->country = null;
// Fatal error: Uncaught TypeError: Typed property Person::$country must be string, null used in E:\MY DATA\Belajar\php-oop\NullLableProperties.php:25
// Stack trace:
// #0 {main}

$person = new Person("Asep", null);
$person->name = "Asep Riki";
$person->addres = "Siliwangi";
$person->country = null;
var_dump($person);
