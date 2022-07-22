<?php
require_once "data/polymorphism/pholymorphism.php";

$company = new Company();

// bentuk 1
$company->programmer = new Programmer("Asep");
var_dump($company);

// Bentuk 2
$company->programmer = new BackendProgrammer("Rendi");
var_dump($company);

// bentuk 3
$company->programmer = new FrondenProgramer("Sinta");
var_dump($company);
