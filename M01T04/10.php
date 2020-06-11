<?php
$ages = "25 18 20 20 18 20 18 18 18 20 25 25 20 20 25 20 18 19 19 19 20 25 25 25 25 25 25 25 18 18";
$agesArray = explode(" ", $ages);
$frequence = array_count_values($agesArray);
$total = count($agesArray);
print_r('El total de encuestados es: ' . count($agesArray)."<br/><br/> Las frecuencias de las edades son: <br/><br/>18 años: $frequence[18]<br/>19 años: $frequence[19]<br/>20 años: $frequence[20]<br/>25 años: $frequence[25]");



?>