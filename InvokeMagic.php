<?php
/**
 * __invoke() merupakan magic function yang di eksekusi ketika object yang kita buat di anggap sebagai function, saat pemanggilannya 
 * Misal ketika Ketika membuat object $student, lalu kita mekalukan pemanggilan dengan cara $student(), maka secara otomatis __invoke() akan di ekseskusi
 */

require_once "data/Student.php";
$student1 = new Student();
$student1->id="1";
$student1->name="Asep Riki";
$student1(1,2,3,4,5);

echo "$student1->name".PHP_EOL;
$student1();