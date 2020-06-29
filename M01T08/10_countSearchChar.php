<?php
//PARA USAR ESTA FUNCION PRIMERO DEBES INGRESAR EL CARACTER QUE SE ESTA BUSCANDO
//Y LUEGO TUS CARACTERES, LOS CUALES PUEDEN SER NÚMEROS, STRINGS O INCLUSO VARCHAR
function countSearchChar($searchChar, ...$characters)
{
    echo "Los caracteres ingresados son  ";
    foreach ($characters as $values) {
        echo "<b>$values</b>, ";
    }

    echo "&nbsp ";
    $arrayItems = array_count_values($characters);
    print_r($arrayItems);


    
    // if (is_string($searchChar)) {
    //     if (in_array($searchChar, $characters)) {
            
    //         echo "La palabra <b>$searchChar</b> <i>SI</i> se encuentra en tus caracteres ingresados.";
    //     } else {
    //         echo "La palabra <b>$searchChar</b> <i>NO</i> se encuentra en tus caracteres ingresados.";
    //     }
    // } elseif (is_float($searchChar) || is_integer($searchChar)) {
    //     if (in_array($searchChar, $characters)) {
    //         echo "El número <b>$searchChar</b> <i>SI</i> se encuentra en tus caracteres ingresados.";
    //     } else {
    //         echo "El número <b>$searchChar</b> <i>NO</i> se encuentra en tus caracteres ingresados.";
    //     }
    // }
    // echo "<hr>";
}

countSearchChar(2,2,3,2,3,4,5);
// countSearchChar(8, 1, 2, 5, 8, "l", "stop");
// countSearchChar("Jack", "Marvin", "Erick", "Eliza", "Pozo", "Jack");
// countSearchChar(52, 1, 2, 3, 4, 5, 6, 7, 8, 9, 52);
// countSearchChar("Vaso", "Corazón", "Ojos", "Bazo", "Boca");
// countSearchChar("Victor", "victor", "ViCtOr");
?>