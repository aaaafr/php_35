<?php


/* Live PHP Controllo Parola 

1. Inserire delle parole all’interno di un array
2. controllare che la parola passata dall’utente è presente nell'array.
*/


$words = explode(' ', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis quibusdam natus necessitatibus officiis, soluta, id perferendis, fugiat repellendus eos blanditiis saepe alias cupiditate expedita reiciendis obcaecati fuga mollitia. Labore, animi.');
var_dump($words);

$word = $_GET['word'];

//var_dump(in_array($word, $words));

if (in_array($word, $words)) {
  echo 'Parola Trovata!';
} else {
  echo 'Not found!';
}
