<?php

$array = str_split('BICICLETA');
$evenChars = '';
$oddChars = '';

for ($i = 0; $i < count($array); $i++) { 
    if ($i % 2 == 0) {
        $evenChars .= $array[$i];
    } else {
        $oddChars .= $array[$i];
    }
}

echo "Caracteres pares: $evenChars<br>";
echo "Caracteres impares: $oddChars<br>";