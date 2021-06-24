<?php

$query = $_GET['invitato'];

$invitati = [
  'Dumi',
  'Gabriele',
  'Alessandra',
  'Eveling',
  'Carmen'
];


if (in_array($query, $invitati)) {
  echo 'Benvenuto al Party';
} else {
  echo 'Inbucato vai via!';
}
