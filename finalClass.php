<?php
/**
 * Kata kunci final bisa digunakan di class, dimana jika kita menggunkan kata kunci final sebelum class, maka class tersebut tidak bisa diwariskan lagi
 * secara otomatis class child nya akan error
 */

 class SosialMedia{
    public string $name;
    final public function say(){

    }
 }

 final class Facebook extends SosialMedia{
    // aka error karena function say() ditambahkan kata kunci final, artinya sudah tidak bisa di override lagi di class childnya
    // public function say(){

    // }
 }

 /**
  * fINAL FUNCTION
  * kata kunci final juga bisa digunakan di function
  * Jika sebuah function kita tambahkan  kata kunci final, maka artinya function tersebut sudah tidak bisa di override lagi di class childnya
  */

//  error
//  class FakeFacebook extends Facebook{

//  }