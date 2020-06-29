<?php
//PARA USAR ESTA FUNCION PRIMERO DEBES INGRESAR EL CARACTER QUE SE ESTA BUSCANDO
//Y LUEGO TUS CARACTERES, LOS CUALES PUEDEN SER NÚMEROS, STRINGS O INCLUSO VARCHAR
function countSearchChar($searchChar, ...$characters)
{
    echo "Los caracteres ingresados son  ";
    foreach ($characters as $values) {
        echo "<b>$values</b>, ";
    }
    $arrChar = array_count_values($characters);
    echo "&nbsp ";
    if (array_key_exists($searchChar, $arrChar)) {
        echo "El item $searchChar SI se encuentra en el arreglo, y se repite $arrChar[$searchChar]" . (($arrChar[$searchChar] == 1) ? " vez" : " veces");
    } else {
        echo "El item $searchChar NO se encuentra en el arreglo.";
    }

    echo "<hr>";
}

countSearchChar(2, 2, 3, 2, 3, 4, 5);
countSearchChar(8, 1, 2, 5, 8, "l", "stop", 8, 8, 5, 5, 8);
countSearchChar("Jack", "Marvin", "Erick", "Eliza", "Pozo", "Jack");
countSearchChar(52, 1, 2, 3, 4, 5, 6, 7, 8, 9, 52);
countSearchChar("Vaso", "Corazón", "Ojos", "Bazo", "Boca");
countSearchChar("Victor", "victor", "ViCtOr", "Victorious", "VictoR");
?>