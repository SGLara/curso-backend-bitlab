<?php
$grades = [10, 8, 5.2, 6.9, 10, 10, 10, 10, 9.7, 8.5];
$promedio = array_sum($grades)/count($grades); 
$sum = 0;

for ($i = 0; $i < count($grades); $i++) { 
    $sum += $grades[$i];
}

echo "El promedio de las notas es: " . number_format($sum / count($grades), 2);

?>