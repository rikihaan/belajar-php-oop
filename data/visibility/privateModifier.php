<?php
class Produk
{
    // membuat properti private
    private string $name;
    private int $price;
    public function __construct(string $name, int $price)
    {
        // pripave hanya bisa di akses dari dalam class itu sendiri jadi pada constructor kita masih bisa akses properti name dan price walau modifier nya private
        $this->name = $name;
        $this->price = $price;
    }

    // membaut function atau method dengan akses modifier public untuk mengakses property dengan modifier private
    function getInfo()
    {
        echo "Product : $this->name" . PHP_EOL;
        echo "Harga : $this->price" . PHP_EOL;
    }
}
