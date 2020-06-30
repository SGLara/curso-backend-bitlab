<?php
function divideTable(int $table)
{
    $number = 1;
    do {
        echo "$table / $number = " . number_format(($table / $number),2) . "<br>";
        $number++;
    } while ($number <= 10);
    echo "<hr>";
}

divideTable(1);
divideTable(2);
divideTable(3);
divideTable(4);
divideTable(5);
divideTable(6);
divideTable(7);
divideTable(8);
divideTable(9);
divideTable(10);

?>