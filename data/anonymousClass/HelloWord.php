<?php
/**
 * Anonymous class atau class tanpa nama.
 * adalah kemapuan mendeklarasikan class, sekaligus megintasiasi object class nya secara langsung
 * Anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implemantasi interface atau abstract class sederhana , tanpa harus membuat impplematsi class nya
 */

 interface HelloWord{
    function sayHello():void;
 }

 $helloWorld = new class ('Anonymous Class') implements HelloWord{

    // contructtor di anonymous class
    private string $name;
    public function __construct(string $name)
    {
        $this->name=$name;
    }

    function sayHello(): void
    {
        echo "Hello $this->name".PHP_EOL;
    }
 };

 $helloWorld->sayHello();