<?php
/**
 * Std class merupakan class kosong bawaan php 
 * stdClass bisa kita gunakan untuk conversi type data array ke object scara otomatis
 */
// array
$array=[
    'firstName'=>'Asep Riki',
    'middleName'=>"Kuriniawan",
    'lastName'=>'Khannedy'
];

// melakukan connversi dari array ke object
$object = (object)$array;
// sekarang array tadi brubah menjadi object
echo $object->firstName.PHP_EOL;
echo $object->middleName.PHP_EOL;
echo $object->lastName.PHP_EOL;
var_dump($object);

// melakkukan conversi dari object ke array
$arrayLagi=(array)$object;
var_dump($arrayLagi);

echo $arrayLagi['firstName'].PHP_EOL;
echo $arrayLagi['middleName'].PHP_EOL;
echo $arrayLagi['lastName'].PHP_EOL;