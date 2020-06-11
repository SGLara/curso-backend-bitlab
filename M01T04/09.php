<?php
$answers = "YES NO YES YES NO NO YES NO YES YES YES YES YES NO NO NO YES NO NO YES YES NO YES NO YES NO YES NO YES NO YES YES NO NO YES YES NO NO NO NO YES YES NO NO NO NO NO YES NO YES";
$answersArray = explode(" ", $answers);
$total = count($answersArray);
$frequence = array_count_values($answersArray);
$frec_yes = $frequence['YES'];
$frec_no = $frequence['NO'];
$percentageYes = number_format((($frec_yes / $total) * 100), 2);
$percentageNo = number_format((($frec_no / $total) * 100), 2);


print_r("Total: $total respuestas <br/>
        La frecuencia de respuestas SI es: $frec_yes <br/>
        El porcentaje de respuestas SI es: $percentageYes %<br/>
        La frencuencia de respuestas NO es: $frec_no <br/>
        El porcentaje de respuesas NO es: $percentageNo %");
?>