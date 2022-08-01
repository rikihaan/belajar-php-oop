<?php
require_once "data/Iterator.php";

$datas =new Data();
var_dump($datas);

foreach($datas as $key=>$value){
    echo "key : $key value : $value".PHP_EOL;
}