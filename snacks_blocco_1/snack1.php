<?php

/* 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$partite =  [
  [
    'home_team' => 'Squadra Jedi',
    'guest_team' => 'Squadra Sit',
    'home_points' => 10,
    'guest_points' => 5
  ],
  [
    'home_team' => 'Squadra Kids Jedi',
    'guest_team' => 'Squadra Kids Sit',
    'home_points' => 10,
    'guest_points' => 5
  ],
  [
    'home_team' => 'Squadra Mid Jedi',
    'guest_team' => 'Squadra Mid Sit',
    'home_points' => 10,
    'guest_points' => 5
  ],
  [
    'home_team' => 'Squadra Pro Jedi',
    'guest_team' => 'Squadra Pro Sit',
    'home_points' => 10,
    'guest_points' => 5
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>

<body>

  <?php

  for ($i = 0; $i < count($partite); $i++) {
    # code...
    $partita = $partite[$i];
    //var_dump($partita);
    $home_team = $partita['home_team'];
    $guest_team = $partita['guest_team'];
    $home_points = $partita['home_points'];
    $guest_points = $partita['guest_points'];

    //var_dump($home_team, $guest_team, $home_points, $guest_points);
    //die();

    /* Olimpia Milano - Cantù | 55-60 */
  ?>

    <p><?= $home_team ?>-<?= $home_team ?> | <?= $home_points; ?>-<?= $guest_points; ?></p>
    <p><?= $home_team . '-' . $home_team . '|' . $home_points . '-' . $guest_points; ?></p>

  <?php

  }

  ?>


</body>

</html>