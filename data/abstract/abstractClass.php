<?php

/**
 * Abstract class adalah sebuah class yang tidak bisa di istancesiasi
 * untuk membuat object dari class abstract hanya bisa dilakukan di child classnya
 */

namespace Data;

use Locale;

abstract class Location
{
    public string $name;
}

class City extends Location
{
}

class Provinces extends Location
{
}
