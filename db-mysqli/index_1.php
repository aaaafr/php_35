<?php

# 1. Definire le costanti per la connessione
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "fab"); // voi mettete root
define("DB_PASSWORD", "password"); // voi mettete root
define("DB_NAME", "laravel_projects"); // voi mettete university
define('DB_PORT', '3306');


//var_dump(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);


# 2. Stabiliamo connessione con il database
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
//var_dump($connection);


# 3. Verifichare la connessione
if ($connection && $connection->connect_error) {
  echo "Connection failed: " . $connection->connect_error;
  die();
}
# 4. Eseguiamo una query se la connesione é stata stabilita
echo 'Connection Successful, Go!';

$sql = "SELECT * FROM projects";
$results = $connection->query($sql);
var_dump($results);

# 5. Verifichiamo se ci sono risultati e cicliamo al loro interno

if ($results && $results->num_rows > 0) {
  // Cicliare tra i risultati e mostraiamoli a schermo
  //var_dump($results->fetch_assoc());
  while ($project = $results->fetch_array()) {
?>
    <h1><?= $project['title']; ?></h1>
    <p><?= $project['description']; ?></p>
<?php
  }
} elseif ($results) {
  echo 'Nessun Risultato';
} else {
  echo 'Errore nella query';
}

# 6. Chiudi la connessione
$connection->close();
