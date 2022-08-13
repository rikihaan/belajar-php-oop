<?php
/**
 * Saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai dengan time zone yang kita set di php.ini
 * atau kita bisa mengubah nya di setting configuration setTimeZone untuk mengubah DateTime
 * 
 */
$date =new DateTime();
$date->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($date);