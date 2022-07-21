<?php
/**
 * Saat kita lkukan override function di class chidl maka saat kita membuat object dari class child nya maka function yg akan di panggil adalah function yang ada di dalam class child nya, ( bukan dari class parent nya)
 * lalu bagai mana jika kita ingin memanggil class yang sama (override) dari class clidl nya
 * di php ada kata kunci parent:namafunction maka kita bisa memanggil funtion yang berada di parent class nya walau kita membuat object dari child class nya
 */

require_once 'data/overridding/parentKeyword.php';
use Data\Retangle;
use Data\Shape;

//  memanggi file 

// membuat object dari parent class
$shape = new Shape();
// memanggil function getCorner()
var_dump($shape->getCorner());

// mambuat object dari class child nya
$retangle=new Retangle;
var_dump($retangle->getCorner());
var_dump($retangle->getCornerParent());