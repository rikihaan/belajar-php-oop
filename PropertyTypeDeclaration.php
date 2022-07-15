<?php

/**
 * Property type Declaration
 * Sama seperti di functio, di propertis pun kita bisa membuat type declaration
 * ini membuat php otomatis mengecek tipe data yang sesuai dengan type declaration yang telah di tentukan
 * jika kita mencoba mengubah . meng set dengan type data yang berbeda, maka otomatis akan terjadi error
 * Ingat !!, bahwa php memiliki fitur type jugling, yang secara otomatis bisa mengkonversi ke tipe data lain
 * Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di propertis
 */
require_once "./data/Person.php";

//  mebuat instan obejec dari class person
$person1 = new Person("Joko", null);

// menambahkan nilai ke property yang  tidak sesuai dengan type declaration
// ini akan error karana menambahkan aray padah type declaration nya adalah string
$person1->name = array();
$person1->address = "Kp Siliwangi" . PHP_EOL;
$person1->country = "Indonesia" . PHP_EOL;
