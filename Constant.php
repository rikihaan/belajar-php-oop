<?php
// memanggil calss Person
require_once "./data/Person.php";
// cara membuat constant ke 1
define("APPLICATION", "PPDB 2022");
// cara dengan mengunakan kata kunci const
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
/**
 * berbeda denga proprty yang melekat pada object instance nya, Constant di php satt di buat maka otomatis akan menempel pada Class nya
 * untuk itu pemanggilan constance dalam class agak sedikit berbeda
 * 
 */
// cara memanggil constant di class
echo Person::AUTHOR . PHP_EOL;
