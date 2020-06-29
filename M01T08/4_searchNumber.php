<?php
//PARA UTILIZAR ESTA FUNCIÓN DEBES INGRESAR UN NÚMERO MÍNIMO, UNO MÁXIMO Y EL NÚMERO QUE DESEAS BUSCAR

function searchNumber(int $numMin, int $numMax, int $numToSearch)
{
    if (in_array($numToSearch, range($numMin, $numMax))) {
        echo "El número $numToSearch <b>SI</b> se encuentra dentro del rango $numMin entre $numMax";
    } else {
        echo "El número $numToSearch <b>NO</b> se encuentra dentro del rango $numMin entre $numMax";
    }
}

searchNumber(0, 10, 8);
echo "<br>";
searchNumber(10, 20, 50);
echo "<br>";
searchNumber(5, 100, 80);
echo "<br>";
searchNumber(100, 1050, 5000);
echo "<br>";
searchNumber(10000, 20000, 2020);
?>