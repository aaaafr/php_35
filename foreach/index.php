<?php

// Foreach

/* Live 2
Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET.
*/

/* var_dump($_GET);

foreach ($_GET as $key => $value) {
  # code...
  var_dump($key);
  var_dump($value);
}
 */


/* Live 1
Stampare una stringa verde se la variabile password passata in 
GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. */

var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ForEach</title>
  <style>
    .red {
      color: red;
    }

    .green {
      color: green;
    }
  </style>
</head>

<body>

  <h1 class="<?php echo $_GET['passw'] === 'boolean' ? 'green' : 'red' ?>">Lorem, ipsum dolor.</h1>

</body>

</html>