<?php

$answer = 25;

do {
    $div = $answer / 2;
    $res = $answer % 2;
    echo "$answer entre 2 es igual a $div y me sobra $res. <br/>";
    $answer--;
} while ($answer >= 0);

?>