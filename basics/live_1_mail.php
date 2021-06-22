<?php

$re = '/[A-z]+@[A-z]+.[A-z]+/m';
$str = 'ew@example.com';



// Print the entire match result
var_dump($matches);



var_dump($_GET['email']);

if (strpos($_GET['email'], '@') && strpos($_GET['email'], '.')) {
  $result = 'ok';
} else {
  $result = 'ko';
}

/* versine con regex */
if (preg_match_all($re, $str)) {
  $result = 'ok';
} else {
  $result = 'ko';
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check email</title>
</head>

<body>
  <h1>Email: <?php echo $result; ?></h1>
</body>

</html>