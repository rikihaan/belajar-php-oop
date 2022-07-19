<?php
require_once "data/visibility/visibilityProtected.php";

// membuat object dari class parent product
$product1 = new Produk("Sabun Mandi", 5000);
// mencoba akses proverty protected langsung
// $product1->name;

// mencoba akse dari class turunanya
class ProdukDummy extends Produk
{
    public function getInfo()
    {
        echo "Nama Produk : $this->name" . PHP_EOL;
        echo "Harga : $this->price" . PHP_EOL;
    }
}

$produkDummy = new ProdukDummy("Sikat Giri", 500);
$produkDummy->getInfo();
