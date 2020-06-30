<?php
//PARA USAR ESTA FUNCION PRIMERO DIGITA EL NUMERO DE ITEMS QUE DESEAS Y LUEGO LOS ITEMS QUE QUIERES GUARDAR
function printNElements(...$elements)
{
    echo "Seleccionaste " . (count($elements)) . " items de tu lista y son: <br><br>";

    for ($i = 0; $i < count($elements); $i++) {
        if ($i % 2 == 0) {
            echo "$elements[$i](PAR) &nbsp ";
        } else {
            echo "$elements[$i](IMPAR) &nbsp ";
        }
    }
    echo "<hr>";
}

printNElements("Spiderman", "Batman", "Hulk", "Thanos", "Venom", "Wolverine", "Batman", "Joker");
printNElements(8, 0, 5, 8, 6, 7, 2, 2, 9, 10, 22, 21, 20, 50, 11);
printNElements("mesa", "cama", "computadora", "lápiz", "silla", "zapato", "camisa", "carruzel", "computadora");
printNElements("Laravel", "VueJS", "ReactJS", "Svelte");
?>