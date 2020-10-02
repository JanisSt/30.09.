<?php
require_once 'NumberInterface.php';
require_once 'RandomNumber.php';
require_once 'NumberStorages.php';
//$data = 'data.txt';
$currentNum = new NumberStorages('data.txt');

//---------make number-----------
$makeNumber = new RandomNumber($currentNum, 1, 100);
$randomNumber = $makeNumber->getNum();
//----------get number------------
$makeNumber->save();


echo $randomNumber . PHP_EOL;
echo 'Average number: ' . $makeNumber->avg() . PHP_EOL;

//$current = $currentNum->load();
//---------insert new numbers---------


//$save =

//file_put_contents('data.txt', ($current . $randomNumber . ';'));


//$array = (explode(';', $data));
//$size = count($array) - 1;
//$value = array_sum($array) / $size;
//$avg = number_format($value, 2);
//
//$makeNumber->Avg();
////'Number: ' . $randomNumber . PHP_EOL;
//echo 'AVG: ' . $avg . PHP_EOL;

