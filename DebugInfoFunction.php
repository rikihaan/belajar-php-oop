<?php
/**
 * Sebelumnya kita sering melakukan debug variable menggunakan var_dump()
 * function var_dump() sebenarnya memanggil function __debugInfo()
 * jika kita inggin merubah isi debug info, kita bisa membuat function __debugInfo()
 */

require_once "data/Student.php";
$student1 = new Student();
$student1->id="1";
$student1->name="Asep Riki";

// melakkukan debug info dengan menambahkan informasi tambahan pada __debugInfo();
var_dump($student1);