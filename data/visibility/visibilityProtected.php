<?php
class Produk
{
    // membuat proverty dengan akses modifier protected
    // visibility denganakses modifier hanya bisa di akses dari child class (class turunanya)
    protected string $name;
    protected int $price;

    // membuat contructor public
    public function __construct(string $name, int $price)
    {
        // set property name dan   price
        $this->name = $name;
        $this->price = $price;
    }
}
