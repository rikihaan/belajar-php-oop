<?php
require_once "data/overridding/functionOveridding.php";

// membuat instace baru dari parrent class Manager
$manager = new Manager("Asep");
$manager->sayHello("Rendi");


// membuat instance dari child class
$vp =new VicePresident("Rendi");
$vp->sayHello("Asep");

