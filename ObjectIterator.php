<?php
require_once "data/objectIteration.php";
$datas = new Data();
foreach($datas as $key=>$data){
    echo "$key : $data".PHP_EOL;
}
/**
 * output
 * first : First
 *second : second
 * hanya yg memiliiki akses modifier public yang bisa di iterasi
 */