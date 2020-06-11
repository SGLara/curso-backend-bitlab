<!-- MURCIELAGO  M=1 U=2 R=3 C=4 I=5 E=6 L=7 A=8 G=9 O=0 -->
<?php

$string = "Hello world!, how are you doing?";
$stringArray = str_split($string);
$counter = count($stringArray);

for ($i=0; $i < $counter; $i++) { 
    if ($stringArray[$i] == "M" || $stringArray[$i] == "m") {
        if ($stringArray[$i] == "M") {
            $stringArray[$i] = str_replace("M","1", $stringArray[$i]);
        } else {
            $stringArray[$i] = str_replace("m","1", $stringArray[$i]);
        }
        
    } elseif ($stringArray[$i] == "U" || $stringArray[$i] == "u") {
        if ($stringArray[$i] == "U") {
            $stringArray[$i] = str_replace("U","2", $stringArray[$i]);
        } else {
            $stringArray[$i] = str_replace("u","2", $stringArray[$i]);
        }

    } elseif ($stringArray[$i] == "R" || $stringArray[$i] == "r") {
        if ($stringArray[$i] == "R") {
            $stringArray[$i] = str_replace("R","3", $stringArray[$i]);
        } else {
            $stringArray[$i] = str_replace("r","3", $stringArray[$i]);
        }

    } elseif ($stringArray[$i] == "C" || $stringArray[$i] == "c") {
        if ($stringArray[$i] == "C") {
            $stringArray[$i] = str_replace("C","4", $stringArray[$i]);
        } else {
            $stringArray[$i] = str_replace("c","4", $stringArray[$i]);
        }

    } elseif ($stringArray[$i] == "I" || $stringArray[$i] == "i") {
        if ($stringArray[$i] == "I") {
            $stringArray[$i] = str_replace("I","5", $stringArray[$i]);
        } else {
            $stringArray[$i] = str_replace("i","5", $stringArray[$i]);
        }

    } elseif ($stringArray[$i] == "E" || $stringArray[$i] == "e") {
        if ($stringArray[$i] == "E") {
            $stringArray[$i] = str_replace("E","6", $stringArray[$i]);
        } else {
            $stringArray[$i] = str_replace("e","6", $stringArray[$i]);
        }

    } elseif ($stringArray[$i] == "L" || $stringArray[$i] == "l") {
        if ($stringArray[$i] == "L") {
            $stringArray[$i] = str_replace("L","7", $stringArray[$i]);
        } else {
            $stringArray[$i] = str_replace("l","7", $stringArray[$i]);
        }

    } elseif ($stringArray[$i] == "A" || $stringArray[$i] == "a") {
        if ($stringArray[$i] == "A") {
            $stringArray[$i] = str_replace("A","8", $stringArray[$i]);
        } else {
            $stringArray[$i] = str_replace("a","8", $stringArray[$i]);
        }

    } elseif ($stringArray[$i] == "G" || $stringArray[$i] == "g") {
        if ($stringArray[$i] == "G") {
            $stringArray[$i] = str_replace("G","9", $stringArray[$i]);
        } else {
            $stringArray[$i] = str_replace("g","9", $stringArray[$i]);
        }

    } elseif ($stringArray[$i] == "O" || $stringArray[$i] == "o") {
        if ($stringArray[$i] == "O") {
            $stringArray[$i] = str_replace("O","0", $stringArray[$i]);
        } else {
            $stringArray[$i] = str_replace("o","0", $stringArray[$i]);
        }
    }
    
}

$translated = implode($stringArray);

print_r($translated);
?>