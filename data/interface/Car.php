<?php

/**
 * Sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan untuk kontarak child
 * namun debenarnya yang lebih tepat untuk kontrak adalah intrface
 * interface mirip seperti abstract class, yang membedakan adalah di interface semua function atau method otomomatis menjadi abstract, dan juga tidak memiliki block
 * di interface tidak boleh memiliki propertis, kita hanya boleh memiliki constan
 * untuk mewariskan inteface, kita tidak menggunakan kata kunci extends, melainkan implements
 * dan berbeda dengan class, kita bisa implements lebih dari satu interface
 */

//  membuat interface
namespace Data;

interface HasBrand
{
    function getbrand(): string;
}

interface isMaintenance
{
    function isMaintenance(): bool;
}

// car interface implement interface HasBrand
interface Car extends HasBrand
{
    // funtion yang di buat akan otomatis abstract
    function drive(): void;
    function getTire(): int;
}

// implements interface
class Avanza implements Car, isMaintenance
{
    // di class avanza yg implent ke interface wajib menarapkan semua method yang ada di interface Car, jika tidak maka error
    function drive(): void
    {
        echo "drive Avanza" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }

    // karena interface car sekarang, implement Hasbrand maka parent class nya pun harus iplement method yg ada di interface Hasbrand
    function getbrand(): string
    {
        return "Toyota" . PHP_EOL;
    }

    // karena sekarang class avansa implement lebih dari 1 interface (isMaintenace) maka wajib juga methondya di overadding
    function isMaintenance(): bool
    {
        return false;
    }
}
