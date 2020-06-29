<?php
function multiply(...$numbers)
{
    $answer = 1;
    echo "El producto de multiplicar los números ";
    foreach ($numbers as $values) {
        echo "$values, ";
        $answer *= $values;
    }
    echo "  es <strong>$answer</strong>";
}

multiply(2, 2);
echo "<br>";
multiply(5, 2,8);
echo "<br>";
multiply(8, 20,30,50);
echo "<br>";
multiply(50, 20,25,80,98);
echo "<br>";
multiply(30,50,87,64,20,1,2,12,6);
?>
