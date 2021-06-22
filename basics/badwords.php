<?php

/* Correzione Badwords
Creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET. 
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
con tre asterischi (***) tutte le occorrenze della parola da censurare.

*/

$sentece = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum error quos beatae, distinctio incidunt inventore culpa neque, sed voluptatibus commodi sapiente quisquam esse assumenda provident?';


$word =
  var_dump($_GET['word']);

$cenSentece = str_replace($_GET['word'], '***', $sentece);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>

<body>

  <h1>PHP Badwords</h1>

  <p>Paragrafo originale: <?php echo $sentece; ?></p>
  <p>Lunghezza Paragrafo: <?php echo strlen($sentece); ?> </p>

  <p>Paragrafo censurato: <?php echo $cenSentece; ?></p>
  <p>Lunghezza Paragrafo Consurato: <?php echo strlen($cenSentece); ?> </p>




</body>

</html>