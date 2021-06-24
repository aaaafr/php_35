<?php
/* 

Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
$_GET['mail']
$_GET['age']

*/
$risultato;
if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
  //var_dump(strlen($_GET['name']) > 3);
  var_dump(is_numeric($_GET['age']));
  $pattern = '/.+@.+\.[A-z]*/m';
  var_dump(preg_match($pattern, $_GET['mail']));

  if (strlen($_GET['name']) > 3 && is_numeric($_GET['age']) && preg_match($pattern, $_GET['mail'])) {
    $risultato = 'Accesso Riuscito';
    echo $risultato;
  } else {
    $risultato = 'Accesso Negato';
    echo $risultato;
  }
}
