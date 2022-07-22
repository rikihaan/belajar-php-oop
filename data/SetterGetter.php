<?php

/**
 * Di php encapsulasi sudah dibuatikan standarisasinya, dimana kita bisa menggunakan method Getter dansetter
 * Getter adalah funtion yang di gunakan untuk mengambil data filed 
 * Setter adalah method yang digunakan untuk mengubah data field
 */

class Catergory
{
    private string $name;
    private bool $expensive;

    public function GetName(): string
    {
        return $this->name;
    }

    public function SetName(string $name)
    {
        // with validation in setter
        if (trim($name) != "") {

            $this->name = $name;
        }
    }

    public function setExspensive(bool $expensive)
    {
        $this->expensive = $expensive;
    }
    public function isExspensive()
    {
        return $this->expensive;
    }
}
