<?php
$numbers = [10, 8, 5.2, 6.9, 10, 10, 10, 10, 9.7, 8.5];
$promedio = array_sum($numbers)/count($numbers); 

echo '<b>Los números son: </b>' .implode(", ", $numbers).'<br/><br/><b>Y su promedio es: </b>' .$promedio;

?>