<?php
require_once "data/import/alias.php";

use Data\Satu\Produk as produk1;
use Data\Dua\Produk as Produk2;

$produk1 = new produk1();
$produk2 = new Produk2();

var_dump($produk1);
var_dump($produk2);
