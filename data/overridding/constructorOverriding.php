<?php

class produk1{
    var $nama;
    var $kat;
    function __construct(string $nama,string $kat="Produk1")
    {
        $this->nama=$nama;
        $this->kat=$kat;
    }
}

class Produk extends produk1{
    function __construct(string $name)
    {
        // parent::__construct($name,'Produk');
        $this->nama=$name;
       
    }
}