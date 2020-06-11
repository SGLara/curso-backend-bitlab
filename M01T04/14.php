<!-- MURCIELAGO  M=1 U=2 R=3 C=4 I=5 E=6 L=7 A=8 G=9 O=0 -->
<?php

$string = "5 81 f5n6, wh8t 8b02t y02??";
$stringArray = str_split($string);
$counter = count($stringArray);

for ($i=0; $i < $counter; $i++) { 
    if ($stringArray[$i] == "1") {
         $stringArray[$i] = str_replace("1","m", $stringArray[$i]);

    } elseif ($stringArray[$i] == "2") {
        $stringArray[$i] = str_replace("2","u", $stringArray[$i]);

    } elseif ($stringArray[$i] == "3") {
        $stringArray[$i] = str_replace("3","r", $stringArray[$i]);

    } elseif ($stringArray[$i] == "4") {
        $stringArray[$i] = str_replace("4","c", $stringArray[$i]);

    } elseif ($stringArray[$i] == "5") {
        $stringArray[$i] = str_replace("5","i", $stringArray[$i]);

    } elseif ($stringArray[$i] == "6") {
        $stringArray[$i] = str_replace("6","e", $stringArray[$i]);

    } elseif ($stringArray[$i] == "7") {
        $stringArray[$i] = str_replace("7","l", $stringArray[$i]);

    } elseif ($stringArray[$i] == "8") {
        $stringArray[$i] = str_replace("8","a", $stringArray[$i]);

    } elseif ($stringArray[$i] == "9") {
        $stringArray[$i] = str_replace("9","g", $stringArray[$i]);

    } elseif ($stringArray[$i] == "0") {
        $stringArray[$i] = str_replace("0","o", $stringArray[$i]);
    }
    
}

$translated = implode($stringArray);

print_r($translated);
?>