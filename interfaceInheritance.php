<?php

/**
 *Sebelumnya kita sudah tahu bahwa di php, shild class hanya boleh memiliki 1 class parent saja
 *namun berbeda dengan iterface, sebuah child class bisa implement lebih dari 1 interface
 *Bahkan interface pun bisa implement interface lain (interface implement interface). bisa lebih dari 1, namun jika interface ingin mewarisi interface lain, kita bisa ginakan kata kunci exstend bukan lagi implement
 *  
 */

use Data\Avanza;

require_once "data/interface/Car.php";
$avanza = new Avanza();
echo $avanza->getbrand();
echo $avanza->isMaintenance();
echo $avanza->getTire();
$avanza->drive();
