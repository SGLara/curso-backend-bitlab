<?php

    //MY ORIGINAL IDEA
for ($num = 1; $num <= 100; $num++) { 
    if ($num % 2 == 0) {
        echo "$num es impar <br/>";
    } else {
        echo "$num es par <br/>";
    }
}

    //SECOND WAY TO DO IT
// for ($num = 1; $num <= 100; $num++) { 
//     echo $num . ($num % 2 == 0 ? ' par' : ' impar') . "<br>";
// }

?>