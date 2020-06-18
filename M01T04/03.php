<?php

$alphabet = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$lowerAlphabet = array_map('strtolower', $alphabet);
$alphabetLenght = count($alphabet);

for ($i=0; $i < $alphabetLenght; $i++) { 
    print_r("$lowerAlphabet[$i] $alphabet[$i]<br/>");
}

    //SECOND ALTERNATIVE

// for ($i = 0; $i < count($alphabet); $i++) { 
//     echo strtolower($alphabet[$i]) . " {$alphabet[$i]} <br/>";
// }

?>

