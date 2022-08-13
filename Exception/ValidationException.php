<?php
/**
 * Saat kita membuat aplikasi, kita tidak akan terhindar dari yang namanya error
 * Di PHP,  error di repesentasikan dengan istilah exception, dan semua semua di repesentasika dalam bentuk class exception
 * Kita bisa menggunakan class exception sendiri, atau menggunakan yang sudah di sediakan oleh php
 * jika kita inggin membuat exception, maka kita harus membuat class yang implements interface Thorowable atau turunan - turunannya
 */

 class ValidationException extends Exception{
    
 }