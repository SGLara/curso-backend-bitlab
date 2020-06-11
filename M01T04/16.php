<?php 
$randomNumber = mt_rand(1,100);

if ($randomNumber == 1 || $randomNumber == 2 || $randomNumber == 3 || $randomNumber == 5 ||$randomNumber == 7) {
    if ($randomNumber % 2 == 0){
        if ($randomNumber % $randomNumber) {
            print_r("El número $randomNumber es: Primo");        
        }
        print_r("El número $randomNumber es: Primo");        
    }
    print_r("El número $randomNumber es: Primo");        
} else {
    print_r("El número $randomNumber es: NO es Primo");
}


?>
