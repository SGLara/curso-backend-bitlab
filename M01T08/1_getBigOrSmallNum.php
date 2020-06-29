<?php
/*PARA CALCULAR CUAL DE LOS NÚMEROS ES EL MAYOR Y EL MENOR SIGUE ESTOS PASOS
1.LLAMA ESTA FUNCION Y DIGITA TUS TRES NÚMEROS
2.Y POR ÚLTIMO ESCOGE UNA DE LAS SIGUIENTES OPCIONES:
    SI QUIERES SABER CUÁL ES EL NÚMERO MAYOR, INGRESA EL NÚMERO 1,
    SI QUIERES SABER CUÁL ES EL MENOR, INGRESA EL NÚMERO 2.
*/

function getBigOrSmallNum(int $num1, int $num2, int $num3, int $option)
{

    echo "Tus números son: $num1, $num2 y $num3<br>";

    if ($option == 1) {
        if ($num1 > $num2) {
            if ($num1 > $num3) {
                echo "$num1 es el <b>mayor</b> de todos.";
            } else {
                echo "$num3 es el <b>mayor</b> de todos.";
            }
        } elseif ($num2 > $num3) {
            echo "$num2 es el <b>mayor</b> de todos.";
        } else {
            echo "$num3 es el <b>mayor</b> de todos.";
        }
    } elseif ($option == 2) {
        if ($num1 < $num2) {
            if ($num1 < $num3) {
                echo "$num1 es el <b>menor</b> de todos.";
            } else {
                echo "$num3 es el <b>menor</b> de todos.";
            }
        } elseif ($num2 < $num3) {
            echo "$num2 es el <b>menor</b> de todos.";
        } else {
            echo "$num3 es el <b>menor</b> de todos.";
        }
    }
    echo "<hr>";
}

getBigOrSmallNum(80, 10, 50, 2);
getBigOrSmallNum(100, 50, 180, 1);
getBigOrSmallNum(15, 8, 20, 2);
getBigOrSmallNum(5, 3, 5, 1);
getBigOrSmallNum(1000, 1025, 2550, 2);
?>