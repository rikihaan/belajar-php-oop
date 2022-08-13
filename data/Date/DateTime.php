<?php
/**
 * Date Time
 * Biasanya dalam bahasa pemerograman sudah disediakan cara untuk memanipulasi data waktu, termasuk di php
 * Di php, kita bisa menggunakan class DateTime untuk memanipulasi data waktu
 * ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi waktu
 * ===== DateTime function 
 * setTime($hour,$minute,$second), ini digunakan untuk memanipulasi waktu (Mengubah waktu DateTime)
 * setDate($year,$mount,$day), (mengubah tanggal DateTime()), karena Default Datetime adalah Waktu saai ini atau saat object DateTime di inisiasi dari class DateTimenya
 */

//  kode Datetime()
$date = new DateTime();
var_dump($date);

// mengubah default time pada DateTime()
$date->setTime(12,12,12);
var_dump($date);

// mengubah default tanggal di DateTime();
$date->setDate(1993,9,20);
var_dump($date);