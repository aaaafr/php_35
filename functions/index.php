<?php

$name = "Fabio";
$yob = 1980;
$lastname = "Pacifici";
/**
 * Calcola eta
 *
 * @param int $age
 * @param string $dob
 * @return void
 */
function calcAge($name, $yob = 1980)
{
  $lastname = "Pacifici";
  var_dump($name, $yob);
  var_dump($lastname);
}

calcAge($name);



// Function con return
function fullName($firstname, $lastName)
{
  return $firstname . ' ' . $lastName;
}


$fullname = fullName("Michele", "Calzi");
var_dump($fullname);
