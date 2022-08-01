<?php
require_once "data/ObjectCloning.php";
$student1=new Student();
$student1->id=1;
$student1->name="Asep";
$student1->setSample("Sample");

// melakukan cloning (bukan membuat object student baru)
$student2=clone $student1;
var_dump($student2);

// semua visibilit mau public, protected atau bahkan private sekalipun akan tetap di clone

// tanpa menggunaka cloning
// $student3=new Student();
// $student3->id=$student1->id;
// $student3->name=$student1->name;
// $student3->setSample($student1->sample);
// var_dump($student3);

// uji coba funtion __clone(), dengan menghilangkan properties sample
$student4 = clone $student1;
var_dump($student4);