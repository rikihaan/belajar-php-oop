<?php
/**
 * Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properti yang ada di object tersebut, menggunakan function foreach
 * hal ini mempermudah kita saat ingin mengakses semua propertis yang ada di object
 * secara default, hanya propertis  yang public yang bisa di akses oleh foreach   
 */
class Data {
    var string $first ="First";
    public string $second = "second";
    private string $third ="third";
    protected string $fourth ="Fourth";
}
