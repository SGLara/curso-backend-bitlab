<?php
function multiplyTable(int $table)
{
    $number = 0;
    do {
        echo "$table x $number = " . ($table * $number) . "<br>";
        $number++;
    } while ($number <= 10);
    echo "<hr>";
}

multiplyTable(1);
multiplyTable(2);
multiplyTable(3);
multiplyTable(4);
multiplyTable(5);
multiplyTable(6);
multiplyTable(7);
multiplyTable(8);
multiplyTable(9);
multiplyTable(10);

?>