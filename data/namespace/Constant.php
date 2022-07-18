<?php

/**
 * kita juga bisa membaut contant dan functio di dalam namespace
 */

//  namespace
namespace Helper;

// membuat function di namespace
function sayHello(string $name)
{
    echo "Hello $name my name is App Riki" . PHP_EOL;
}

// membuat constant di namespace
const APP = "Aplikasi PPDB 2022";
