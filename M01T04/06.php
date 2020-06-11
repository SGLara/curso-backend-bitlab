<?php

$randomNumbers = [mt_rand(0,9), mt_rand(0,9), mt_rand(0,9), mt_rand(0,9)];
$sumArray = $randomNumbers[0] + $randomNumbers[1] + $randomNumbers[2] + $randomNumbers[3];
$arrayToShow = implode($randomNumbers);

print_r("<center><h1>El número que sumaremos al azar es $arrayToShow</h1><center><br><br>" . "<center><h2>$randomNumbers[0]  +  $randomNumbers[1]  +  $randomNumbers[2]  +  $randomNumbers[3]  =  $sumArray</h2></center>");


//Also I found the array_sum, but I'd rather this
?>