<?php

//THIS IS AN EVEN SHORT WAY TO SOLVE THIS PROBLEM

$random = mt_rand(21,34);

for ($ovejita = 1; $ovejita <= $random; $ovejita++) { 
    echo "$ovejita ovejita" . ($ovejita == 1 ? '' : 's') . "...<br/>";
}

echo "Zz. Zz. Zz.";
echo "<br/><h3>$random is the random number, so it works!!</h3>";

    //THIS WAS THE FIRST IDEA I HAD


// $ovejita = 1;

// while ($ovejita <= $random){
//     if($ovejita == 1){
//         echo "$ovejita ovejita..." . "<br>";
//     } else{
//         echo "$ovejita ovejitas..." . "<br>";        
//     }
//     $ovejita++;
// }
?>