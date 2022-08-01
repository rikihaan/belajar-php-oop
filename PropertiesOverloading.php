<?php
require_once "data/Overloading/Zero.php";

$zero1=new Zero();
$zero1->name="Asep Riki";
echo $zero1->name;
echo isset($zero1->name);
var_dump($zero1);
unset($zero1->name);
var_dump($zero1);

// function overloading
$zero1->say("Asep","Riki");
Zero::Asep("Dadang","Ucup");
