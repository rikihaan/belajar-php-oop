<?php
require_once "data/visibility/privateModifier.php";

$product1 = new Produk("Sabun", 5000);
// saat kita coba akses secarang langsung property private maka akan terjadi error
$product1->getInfo();
