<?php

/**
 * Defaul propertis value
 * sama seperti variable, di propertis juga kita bisa langsung mengisi valuenya
 * ini mirip seperti default value, jadi jika kita tidak ubah nilai property di objecnya, maka properis akan memiliki value yang di set seagai default value
 */

//  mebuat calss person
class Person
{
    // mendeclarasikan propertis besrta type dan juga defaul valueny
    var string $name;
    var string $addres;
    var string $country = "Indonesia";
}

// membuat instance object dari class Person
$person = new Person("Ahmad", null);

// set nilai value property / filed
$person->name = "Ading Surading";
$person->addres = "Cianjur";

// property $country taidak kita set
var_dump($person);
