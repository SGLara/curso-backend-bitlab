<?php
    
$string = "HOLA";
$array = str_split($string);
$array = array_reverse($array);

for ($i = 0; $i < count($array); $i++) { 
    echo "$array[$i]";
}


    //WITHOUT USING A CONTROL STRUCTURE
// $string = "BICICLETA";
// $revString = strrev($string);
// print_r($revString);

?>