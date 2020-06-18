<?php

$num1 = mt_rand(1,100);
$num2 = mt_rand(1,100);
echo "<b>Minimo común multiplo de $num1 --y-- $num2</b><br/><br/>";

while ($num1 > 1 && $num2 > 1) {
    if ($num1 % 2 || $num2 % 2) {
        if (condition) {
            # code...
        }









        $num1 /= 2;
        $num2 /= 2;
        $mcm = 2;
    } elseif ($num1 % 3 || $num2 % 3) {
        $num1 /= 3;
        $num2 /= 3;
        $mcm = 3;
    } elseif ($num1 % 5 || $num2 % 5) {
        $num1 /= 5;
        $num2 /= 5;
        $mcm = 5;
    } elseif ($num1 % 7 || $num2 % 7) {
        $num1 /= 7;
        $num2 /= 7;
        $mcm = 7;
    } else {
        $num1 = $num1;
        $num2 = $num2;
    } 
print_r("$num1 ---- $num2 | $mcm<br/>");


}

?>
