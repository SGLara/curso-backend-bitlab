<?php

$answers = ['YES', 'NO', 'YES', 'YES', 'NO', 'NO', 'YES', 'NO', 'YES', 'YES', 'YES', 'YES', 'NO', 'YES', 'YES'];
$yes = 0;
$no = 0;
$totalAnswers = count($answers);
$a = 0;

do {
   ($answers[$a] == 'YES') ? $yes++ : $no++;
   $a++;
} while($a < $totalAnswers);

echo "The total number of answers is: $totalAnswers answers<br/><br/>";
echo "The frequence of YES answers is: $yes<br>";
echo "The percentage of YES answers is: " .number_format((($yes / $totalAnswers) * 100), 2). "%<br>";
echo "The frequence of NO answers is: $no<br>";
echo "The percentage of NO answers is: " .number_format((($no / $totalAnswers) * 100), 2). "%<br>";


        // MY ORIGINAL IDEA
// $answers = "YES NO YES YES NO NO YES NO YES YES YES YES YES NO NO NO YES NO NO YES YES NO YES NO YES NO YES NO YES NO";
// $answersArray = explode(" ", $answers);
// $total = count($answersArray);
// $frequence = array_count_values($answersArray);
// $frec_yes = $frequence['YES'];
// $frec_no = $frequence['NO'];
// $percentageYes = number_format((($frec_yes / $total) * 100), 2);
// $percentageNo = number_format((($frec_no / $total) * 100), 2);


// print_r("Total: $total respuestas <br/>
//         La frecuencia de respuestas SI es: $frec_yes <br/>
//         El porcentaje de respuestas SI es: $percentageYes %<br/>
//         La frencuencia de respuestas NO es: $frec_no <br/>
//         El porcentaje de respuesas NO es: $percentageNo %");

?>