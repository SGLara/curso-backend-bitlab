<?php
$randomFinal = mt_rand(1,100);
echo "Número Primos entre 1 y $randomFinal <br/><br/>";

for ($i = 1; $i <= $randomFinal; $i++){
    $divisor = 0;
    for ($j = 1; $j <= $i; $j++) {
        if($i%$j == 0) {
            $divisor += 1;
        }
    }

    if($divisor == 2 || $i == 1){
    print $i;
    print '<br>';
    }
}
?>