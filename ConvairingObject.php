<?php
/**
 * CONPARING OBJECT
 * Sama seperti type data lain, untuk membandingkan dua buah object, kita bisa menggunakan operator == (equal) dan === (identity)
 * Operator == (equal) untuk  membandingkan semua properties yang terdapat di object tersebut, temasuk value dari propertiesnya
 */
require_once "data/ObjectCloning.php";
$student1=new Student();
$student1->id="1";
$student1->name="Asep";

$student2= new Student();
$student2->id="1";
$student2->name="Asep";

// == (equal)
var_dump($student1==$student2);

// identity (===)
var_dump($student1===$student2);
var_dump($student1 === $student1);//true karena dari object yang sama identik
