<?php
//INSERTA LA PALABRA QUE DESEAS ANALIZAR
function countCapLowCase(string $string)
{
    $arrayString = str_split($string);
    $upperLetters = 0;
    $lowerLetters = 0;
    $message = "";
    foreach ($arrayString as $result) {
        if (ctype_upper($result)) {
            $upperLetters++;
        } else {
            $lowerLetters++;
        }
    }

    if (ctype_upper($string)) {
        $message = "La palabra <b>$string</b> tiene:  TODAS las letras mayúsculas y NINGUNA letra en minúscula.";
    } elseif (ctype_lower($string)) {
        $message = "La palabra <b>$string</b> tiene:  TODAS las letras minúsculas y NINGUNA letra en mayúscula.";
    } else {
        $message = "La palabra <b>$string</b> tiene:  $upperLetters letra" . ($upperLetters == 1 ? "" : "s") . " mayúscula" . ($upperLetters == 1 ? "" : "s") . " y $lowerLetters letra" . ($lowerLetters == 1 ? "" : "s") . " minúscula" . ($lowerLetters == 1 ? "." : "s.");
    }

    echo $message . "<hr>";
}

countCapLowCase("STEVEN");
countCapLowCase("manzana");
countCapLowCase("EsDrUjUlAs");
countCapLowCase("BiciClETa");
countCapLowCase("popEyE");
?>
