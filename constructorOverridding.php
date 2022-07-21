<?php
require_once "data/overridding/constructorOverriding.php";

// membuat object dari parent class
$produk1 =new produk1("Sabun Mandi","Produk1");
var_dump($produk1);

// membuat object dari child class
$produk=new Produk("Pasta Gigi");
var_dump($produk);
