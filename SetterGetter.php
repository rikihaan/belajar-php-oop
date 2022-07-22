<?php
require_once "data/SetterGetter.php";

$produk1 = new Catergory();
$produk1->SetName("Hanpone");
$produk1->setExspensive(true);
$produk1->SetName("");

echo "Name : {$produk1->GetName()}" . PHP_EOL;
echo "Exspensive : {$produk1->isExspensive()}" . PHP_EOL;
