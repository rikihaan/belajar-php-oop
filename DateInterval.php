<?php
/**
 * sang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misal hanya menambah 1 tahun, atau mengurangi beberapa hari 
 * Hal ini bisa di lakukan dengan function add milik DateTime
 * namun function add tersebut menerima  parameter berupa DateInterval 
 * saat menggunkan DateInteval duration, kita perlu menantukan berapa banyak kita menambah interval 
 * Kita bisa lihat detailnya di dolumnetasi nya  https://www.php.net/manual/en/dateinterval.construct.php
 * untuk pembuatan duration, harus ddi awali dengan karakter P yang akrtinya perioid
 */
$date = new DateTime();
$date->setDate(2020,12,30);

// memnguwaktu
$date->setTime(12,12,12,0);

// menambah interva  tahun
$date->add(new DateInterval("P1Y"));
var_dump($date);

// menambah interval 1 bulan
$dateInterval = new DateInterval("P1M");
$dateInterval->invert=1;
$date->add($dateInterval);
var_dump($date);