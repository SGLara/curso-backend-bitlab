<?php
function sum(...$numbers)
{
    $answer = 0;
    echo "La suma de los números ";
    foreach ($numbers as $values) {
        echo "$values, ";
        $answer += $values;
    }
    echo "es <strong>$answer</strong><hr>";

}

sum(1, 2, 3);
sum(10, 20, 30, 50);
sum(100, 20, 120, 8, 5, 7);
sum(1, 2, 3, 1, 8, 8, 8, 7, 8, 17);
sum(1, 200, 3, 100, 5, 5, 8, 6, 8, 7);
?>