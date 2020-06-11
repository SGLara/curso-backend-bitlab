<?php
$myBooks = ['The Adventures of Sherlock Holmes', 'Dracula','The knight in the rusty armor', 'The 7 habits of highly effective people', 'Spider-man comic'];
$myBooksLenght = count($myBooks);
$rb = mt_rand(0, ($myBooksLenght-1));

print_r('<h3>El libro que debes leer hoy es: </h3>'.$myBooks[$rb]);
unset($myBooks[$rb]);
$myBooksStr = implode(", ", $myBooks);
print_r('<h3>Y los libros que NO leeré son: </h3>'. $myBooksStr);
?>