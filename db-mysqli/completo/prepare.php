<?php

define('DB_HOST', 'localhost');
define("DB_USER", 'fab');
define('DB_PASS', 'password');
define('DB_NAME', 'laravel_projects');
define('DB_PORT', '3306');


#connect to the database with mysqli
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

# check for connection errors
if ($connection && $connection->connect_error) {
  echo 'Sorry, connection failed! ' . $connection->connect_error;
  die();
}

echo 'Connection successful! yeee';
//var_dump($connection);

$statement = $connection->prepare("INSERT INTO `projects` (`user_id`,`title`, `description`) VALUES (?, ?, ?)");
$statement->bind_param("iss", $user_id, $title, $desc);
$user_id = 1;
$title = "Mysql";
$desc = "Lorem, ipsum dolor.";
$statement->execute();
var_dump($statement);

$results = $connection->query("SELECT * FROM `projects`;");
if ($results && $results->num_rows > 0) {
  var_dump($results);
  while ($row = $results->fetch_assoc()) {
    var_dump($row);
  }
} elseif ($results) {
  # code...
  echo "0 Results";
} else {
  echo "Query Error";
}
