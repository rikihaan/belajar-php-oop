<?php
class Student{
    public $id;
    public $name;
    private $sample;

    public function setSample($sample){
        $this->sample=$sample;
    }

    /**
     * Menambahkan function __clone()
     * function ini akan otomatis di ekseskusi setlah proses clone pada object selesai
     * jadi pada function __clone() ini kita bisa nyeleksi propertis mana yang mau di hapus, atau tidak akan di clone
     */

     public function __clone()
     {
        unset($this->sample);
     }
}