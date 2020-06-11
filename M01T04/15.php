<?php 
$randomPowers = [2, 3, 4, 5, 6, 7, 8, 9];
$number = 2;

$a = 0;
while ($a < 8) {
    print_r("$number elevado a $randomPowers[$a] es: " .$number**$randomPowers[$a]."<br/>");
    $a++;
}

?>