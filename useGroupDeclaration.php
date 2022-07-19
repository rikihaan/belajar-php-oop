<?php
require_once "data/import/useGroupDeclaration.php";

// tanpa use group declaration

/*
use function Helper\sayHello;
*use const Helper\APPLICATION;
*use Helper\Produk;
*$produk = new Produk();
*var_dump($produk);
*echo APPLICATION;
*sayHello("Asep Riki")
 */

//  dengan menggunakan use group declaration
use Helper\{function sayHello, const APPLICATION, Produk};

$produk = new Produk();
echo APPLICATION;
sayHello("Asep Riki");
