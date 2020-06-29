<?php
function floatConverter(string $character){
    $characterC = str_replace("$","",$character);
    echo "Tu caracter $character ahora es: ".number_format((float)$characterC,2,".",",");
    echo "<hr>";
}

floatConverter("$ 199");
floatConverter("$ 210");
floatConverter("$ 10");
floatConverter("$ 8.25");
floatConverter("$ 100");
?>