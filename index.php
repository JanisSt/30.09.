<?php
$file = 'data.txt';

$current = file_get_contents($file);

$save = [$current, ];
$randomNumber = rand(1, 1000);

array_push($save, $randomNumber, ",");

file_put_contents('data.txt', $save  );
$array = explode(',', $current);
$sum = array_sum($array);
$count = count($array);

echo "Number: $randomNumber" .PHP_EOL;
$avg = ($sum/$count);
echo "Average number: " . number_format(($avg), 2, '.', '') .PHP_EOL;

