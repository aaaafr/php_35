<?php


/* Snack 4
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 */


$numbers = [];

/* for ($i = 0; count($numbers) < 15; $i++) {
  # code...
  $number = rand(0, 200);
  if (!in_array($number, $numbers)) {
    $numbers[] = $number;
  }
} */

while (count($numbers) < 15) {
  $number = rand(0, 200);
  if (!in_array($number, $numbers)) {
    $numbers[] = $number;
  }
}
var_dump($numbers);
