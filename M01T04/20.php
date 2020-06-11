<?php
$randomFinal = mt_rand(1600, date("Y"));

for ($i=1500; $i <= $randomFinal; $i++) {
    if ($i % 4 == 0 || $i % 400 == 0) {
        echo "El año $i es bisiesto.<br/>";
    } else {
        echo "El año $i NO es bisiesto.<br/>";
    }
}

?>