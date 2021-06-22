<?php

/* Basics
- Variabili (single and multiline)
- Strighe (strings and functions)
- Numeri (math functions)
- Array (simple)
- Array associative (complex)
- Condizionali 
- Ciclo For
- Ciclo While/DoWhile
*/

$names = ['Eduardo', 'Dumi', 'Carmen', 'Eveling'];

// Print simple array
var_dump($names);
// Print array element
var_dump($names[0]);

// Define an associative array

$userData = [
  'name' => 'John',
  'lastname' => 'Doe',
  'age' => 30,
  'friends' => ['Jane', 'Billy', 'Mike']
];

var_dump($userData);

var_dump($userData['age']);


// Add elements to the array
$names[] = 'Simone';
var_dump($names);

$userData['job'] = 'Producer';
var_dump($userData);

// Array Multidimensinali
/* $team = [
  [],
  [],
  [],
];
 */
$team = [ // primo livello: array "contenitore" con indici numerici

  [ // secondi livelli: array associtativi
    "name" => "Fabio",
    "lastname" => "Forghieri",
    "role" => "Co-Founder"
  ],
  [
    "name" => "Michele",
    "lastname" => "Papagni",
    "role" => "Head of Teaching"
  ]
];
var_dump($team[0]);


$randomNumber = rand(10, 100);
var_dump($randomNumber);


/* Live PHP Controllo Mail 
1. Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.
2. Se è corretta stampare un div che contenga “OK”, altrimenti che contenga “KO”.
VEDI file live_1_mail.php
*/





/* Live PHP Controllo Parola 

1. Inserire delle parole all’interno di un array
2. controllare che la parola passata dall’utente è presente nell'array.

VEDI file word_check.php
*/

/* for ($i = 0; $i < count($names); $i++) {
  # code...
  echo $names[$i];
} */

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Basics</title>
</head>

<body>

  <h1>PHP Basics</h1>

  <p>

    <span>
      <?php
      // Stampa singolo elemento array
      echo $names[1]; ?>
    </span>
  </p>

  <h2> <?php echo $userData['age']; ?></h2>
  <p>Best Friend: <?php echo $userData['friends'][1]; ?></p>





</body>

</html>