<?php
/**
 * MAGIC FUNCTION
 * Magic function adalah function-function yang sudah ditentukan kegunaan nya oleh php
 * kita tiadk bisa membuat function yang sama, walauppun di paksakan tetap akan mengikuti kegunaan yang sudah di tentukan php
 * sebelumnya kita telah membahas beberapa magic function, seperti __construct() sebagai contructor, __dectruct() sebagai destructor, dan __clone() sebagai object cloning
 * 
 */

/**
 * 1. __toString() function merupakan salah satu magict function yang digunakan sebagai representasi string sebuah object
 * jika misal kita ingin membuat string dari object kita, kita busa membuat function__tostring()
 *
 * */ 
require_once "data/Student.php";
$student1 = new Student();
$student1->id="1";
$student1->name="Asep Riki";
$string = (string)$student1;
echo $string;