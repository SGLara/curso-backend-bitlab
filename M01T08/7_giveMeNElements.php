<?php
//PPARA USAR ESTA FUNCION PRIMERO DIGITA EL NUMERO DE ITEMS QUE DESEAS Y LUEGO LOS ITEMS QUE QUIERES GUARDAR
function giveMeNElements($Nitems, ...$Elements)
{
    echo "Estos son tus elementos: ";
    foreach ($Elements as $items) {
        echo "$items, ";
    }
    echo "<br><br>Y seleccionaste $Nitems items aleatorios de tu lista y son: ";

    for ($i = 0; $i < $Nitems; $i++) {
        $randomItems = mt_rand(0, (count($Elements) - 1));
        echo "$Elements[$randomItems], ";
    }
    echo "<hr>";
}

giveMeNElements(2, "Spiderman", "Batman", "Hulk", "Thanos");
giveMeNElements(5, 0, 5, 8, 6, 7, 2, 2, 9, 10, 22, 21);
giveMeNElements(3, "mesa", "cama", "computadora", "lápiz", "silla", "peine");
?>