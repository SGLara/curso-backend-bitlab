<?php
$random = mt_rand(21,34);
$ovejita = 1;

while ($ovejita <= $random){
    if($ovejita == 1){
        echo "$ovejita ovejita..." . "<br>";
    }elseif ($ovejita > $random) {
        echo ".zZ .zZ .zZ";
    }
    else{
        echo "$ovejita ovejitas..." . "<br>";        
    }
    $ovejita++;
}

echo "<br/><h3>$random is the random number, so it works!!</h3>";

?>