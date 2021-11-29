<!-- Snack 3
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$rands = array();

while (count($rands) < 15) {
    $number = rand(1, 100);

    if (in_array($number, $rands) == false) {
        array_push($rands, $number);
    }      
}
var_dump($rands);

?>