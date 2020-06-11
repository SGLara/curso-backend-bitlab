<?php
$names = "Ada Adan Ivan Steven Kevin Jonathan Helen Maria Stefany Jairo Milena Cesia Carlos Ricardo Isamar Christopher Andy Arnaldo Javier Gaby Madrid Monica Karen Patty Ben Juanita Fonseca Reina Irvin Mario";
$alphabet = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$namesLetters = ['A', 'A', 'I', 'S', 'K', 'J', 'H', 'M', 'S', 'J', 'M', 'C', 'C', 'R', 'I', 'C', 'A', 'A', 'J', 'G', 'M', 'M', 'K', 'P', 'B', 'J', 'F', 'R', 'I', 'M'];
$namesArray = explode(' ', $names);
$namesLength = count($namesArray);

echo "<h3>NOMBRES: </h3>$names<br/><br/><h3>INICIALES DE LOS NOMBRES: </h3>";

for ($i=0; $i < $namesLength; $i++) { 
    $inicials = substr($namesArray[$i], 0, 1);
    echo "$inicials ";
}

$missingLetters = array_diff($alphabet, $namesLetters);
$missingLettersString = implode(" ", $missingLetters);
echo '<h3>LETRAS DEL ABECEDARIO QUE NO ESTÁN INCLUIDAS EN LAS INICIALES:</h3>';
print_r($missingLettersString);
?>